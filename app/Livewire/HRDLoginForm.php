<?php

namespace App\Livewire;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Component;


class HRDLoginForm extends Form
{
    public string $name = '';

    public string $password = '';

    public array $rules = [
        'name' => 'required|string|min:3',
        'password' => 'required|string|min:3',
    ];

    /**
     * Attempt to authenticate HRD's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::attempt(['name' => $this->name, 'password' => $this->password])) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                $this->messages()
            ]);
        }

        // Check if the authenticated user has the required role
        $user = Auth::user();
        if ($user->role !== 'hrd') {
            Auth::logout();

            throw ValidationException::withMessages([
                'form.name' => __('Bukan HRD :)'), // Or a custom message
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    public function messages() {
        return [
            'name.required' => 'Nama wajib diisi.',
            'name.alpha' => 'Nama hanya boleh berisi huruf.',
            'name.min' => 'Nama harus memiliki minimal :min karakter.',
            'password.required' => 'Password wajib diisi.',
            'password.string' => 'Password harus berupa string.',
            'password.min' => 'Password harus memiliki minimal :min karakter.',
            
        ];

    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

         throw ValidationException::withMessages([
            'form.hrdName' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->name).'|'.request()->ip());
    }
}
