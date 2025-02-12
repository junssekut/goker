<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'nickname',
        'birth_place',
        'dob',
        'gender',
        'domicile',
        'education_level',
        'school',
        'major',
        'experience',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);  // Foreign key is 'user_id'
    }
}
