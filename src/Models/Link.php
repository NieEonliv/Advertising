<?php

namespace Nieeonliv\Advertising\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public $timestamps = false;

    protected $table = 'links';

    protected $fillable = [
        'tag',
    ];
}
