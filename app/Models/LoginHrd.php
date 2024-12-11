<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// database bang
class LoginHrd extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($hrd) {
            $hrd->profile()->create([
                'position' => 'Default Position',  // Set default values
                'department' => 'Default Department',
            ]);
        });
    }
}
