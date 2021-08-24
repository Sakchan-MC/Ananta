<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herb extends Model
{

    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'image',
        'category_id'
    ];
}
