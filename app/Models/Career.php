<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    public $timestamps = false;
    protected $table = 'career';

    protected $fillable = [
         'name',
          'location'
    ];

    protected $guarded = ["id"];

    public function detail()
    {
        return $this->hasOne(DetailCareer::class, 'CareerId');
    }
}
