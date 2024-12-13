<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailCareer extends Model
{
    protected $table = 'detail_careers';

    protected $fillable = [
        "Description",
        "Jobdesk",
        "Requirement",
        "AboutTeam",
        "DateEnd"
    ];

    protected $guarded = ["CareerId"];

    public function career()
    {
        return $this->belongsTo(Career::class, 'CareerId');
    }
}