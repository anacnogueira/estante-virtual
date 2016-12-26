<?php

namespace Estante\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class CategoryRepository extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

}
