<?php

namespace Estante\Entities;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    protected $fillable = [
    	'name', 
    	'description'
    ];

    public $timestamps = false;


    public function books()
    {
    	return $this->belongsToMany('Estante\Entities\Book');
    }
}
