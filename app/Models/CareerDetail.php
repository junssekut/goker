<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerDetail extends Model
{
    protected $table = 'usercareer';
     public $timestamps = false;
    protected $fillable = [
        'user_career_id',
        'user_id',
        // 'career_id',
        'cv',
        'score',
        'career_status',
        'DateUploaded'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    // public function career() {
    //     return $this->belongsTo(Career::class);
    // }
}
