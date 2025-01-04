<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerCategory extends Model
{
    protected $table = 'career_category';

    protected $fillable = [
        'category_name'
    ];

    public $timestamps = false;

    protected $guarded = ["id"];

    public function careers() {
        return $this->hasMany(Career::class, 'category_id');
    }
}
