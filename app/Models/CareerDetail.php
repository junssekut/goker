<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerDetail extends Model
{
    protected $table = 'usercareer';

    // Use custom timestamps
    public $timestamps = true;
    const CREATED_AT = 'date_uploaded'; // Custom created_at column
    const UPDATED_AT = 'date_updated'; // Custom updated_at column
    protected $primaryKey = 'user_career_id'; // Set the custom primary key
    protected $fillable = [
        'user_career_id',
        'user_id',
        'career_id',
        'cv',
        'score',
        'psychological_test_score',
        'interview_score',
        'mcu_score',
        'review',
        'career_status',
        'date_uploaded', // Include these to allow mass assignment
        'date_updated',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Access user profile via user
    public function profile()
    {
        return $this->hasOneThrough(
            UserProfile::class,
            User::class,
            'id',        // Foreign key on the User table (primary key of User)
            'user_id',   // Foreign key on the UserProfile table
            'user_id',   // Local key on the CareerDetail table
            'id'         // Local key on the User table
        );
    }

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
