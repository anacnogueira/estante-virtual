<?php

namespace Estante\Entities;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    protected $fillable = ['name', 'description'];

    public $timestamps = false;

}
