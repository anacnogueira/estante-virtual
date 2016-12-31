<?php

namespace Estante\Repositories;

use Estante\Entities\Book;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class CategoryRepositoryRepositoryEloquent
 * @package namespace Estante\Repositories;
 */
class BookRepositoryEloquent extends BaseRepository implements BookRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Book::class;
    }   

    
}
