<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    public $timestamps = false;
    protected $table = 'career';

    protected $fillable = [
        'name',
        'location',
        'briefDescription',
        'category_id'
    ];

    protected $guarded = ["id"];

    public function detail()
    {
        return $this->hasOne(DetailCareer::class, 'CareerId');
    }

    public function category()
    {
        return $this->belongsTo(CareerCategory::class, 'category_id');
    }
}
