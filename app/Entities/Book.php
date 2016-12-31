<?php

namespace Estante\Entities;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{

    protected $fillable = [
    	'title',
    	'category_id',
    	'pages',
    	'isbn',
    	'read',
    	'type'
    ];

    public function authors()
    {
    	return $this->hasMany('Estante\Entities\Author')->orderBy('name');
    }

    public function category()
    {
    	return $this->hasOne('Estante\Entities\Category');
    }

}
