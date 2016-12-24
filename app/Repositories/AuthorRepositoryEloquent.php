<?php

namespace Estante\Repositories;

use Estante\Entities\Author;
use Prettus\Repository\Eloquent\BaseRepository;

class AuthorRepositoryEloquent extends BaseRepository implements AuthorRepository
{
	public function model()
	{
		return Author::class;
	}	
}