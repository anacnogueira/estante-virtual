<?php

namespace Estante\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class BookImage extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    	'book_id',
    	'image'
    ];

}
