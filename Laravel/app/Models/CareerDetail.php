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

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
