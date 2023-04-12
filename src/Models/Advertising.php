<?php

namespace Nieeonliv\Advertising\Models;

use Illuminate\Database\Eloquent\Model;

class Advertising extends Model
{
    public $timestamps = false;

    protected $table = 'advertisings';

    protected $fillable = [
        'position',
        'tag',
        'style',
        'option',
    ];
}
