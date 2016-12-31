<?php

namespace Estante\Entities;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    

    protected $fillable = [
    	'name'
    ];

    public $timestamps = false;

    public function books()
    {
    	return $this->hasMany('Estante\Entities\Book');
    }
}
