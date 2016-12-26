<?php

namespace Estante\Entities;

use Illuminate\Database\Eloquent\Model;


class Category extends Model implements Transformable
{
    

    protected $fillable = [
    	'name'
    ];

    public $timestamps = false;
}
