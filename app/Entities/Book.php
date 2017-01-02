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
    	'type',
        'summary'
    ];

    public function authors()
    {
    	return $this->belongsToMany('Estante\Entities\Author');
    }

    public function category()
    {
    	return $this->belongsTo('Estante\Entities\Category');
    }

}
