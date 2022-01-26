<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    protected $fillable = [

        'title',
        'release',
        'duration',
        'features',
        'license',
        'lyrics',
        'genre',
    ];
}
