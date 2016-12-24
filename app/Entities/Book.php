<?php

namespace Estante\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Book extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    	'title',
    	'category_id',
    	'pages',
    	'isbn',
    	'read',
    	'type'
    ];

}
