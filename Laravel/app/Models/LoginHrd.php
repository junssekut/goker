<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class LoginHrd extends Authenticatable {
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($hrd) {
            // Automatically create a UserProfile for the new user
            $hrd->profile()->create();
        });
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class);  // The foreign key is 'user_id' in the UserProfile table
    }

}
