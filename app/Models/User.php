<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            // Automatically create a UserProfile for the new user
            $user->profile()->create();
        });
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Define the relationship with the UserProfile model
    public function profile()
    {
        return $this->hasOne(UserProfile::class);  // The foreign key is 'user_id' in the UserProfile table
    }

    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'hrd')
            return $this->role === 'hrd';

        if($panel->getId() === 'admin')
            return $this->role === 'admin';

        if($panel->getId() === 'user')
            return $this->role === 'user';
        return false;

    }
}
