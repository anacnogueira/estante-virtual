<?php

namespace Estante\Entities;

use Illuminate\Database\Eloquent\Model;


class BookImage extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    	'book_id',
    	'image'
    ];

}
