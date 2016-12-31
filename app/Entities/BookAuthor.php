<?php

namespace Estante\Entities;

use Illuminate\Database\Eloquent\Model;


class BookAuthor extends Model 
{
    protected $fillable = [
    	'book_id',
    	'author_id'
    ];

}
