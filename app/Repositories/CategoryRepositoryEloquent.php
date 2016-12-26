<?php

namespace Estante\Repositories;

use Estante\Entities\Category;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class CategoryRepositoryRepositoryEloquent
 * @package namespace Estante\Repositories;
 */
class CategoryRepositoryEloquent extends BaseRepository implements CategoryRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }   

    
}
