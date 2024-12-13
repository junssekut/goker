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
        'name' => 'required|alpha|min:3',
        'password' => 'required|string|min:5',
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
                'name' => 'Nama tidak valid.',
                'password' => 'Password tidak valid.',
            ]);
        }

        RateLimiter::clear($this->throttleKey());
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
