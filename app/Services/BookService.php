<?php
namespace Estante\Services;

use Estante\Repositories\BookRepository;
use Estante\Validators\BookValidator;
use \Prettus\Validator\Exceptions\ValidatorException;

class BookService
{
	protected $repository;
	protected $validator;

	public  function __construct(BookRepository $repository, BookValidator $validator)
	{
		$this->repository = $repository;
		$this->validator  = $validator;
	}

	public function create(array $data)
	{

		try {
			$this->validator->with($data)->passesOrFail();
			$book = $this->repository->create($data);
			$this->saveAuthors($book, $data['author_id']);

			return true;
		} catch (ValidatorException $e) {
			return [
				'error' => true,
				'message' => $e->getMessageBag()
			];
		}
	}

	public function update(array $data, $id)
	{
		try {
			
			$book = $this->repository->find($id);
			$this->validator->with($data)->passesOrFail();
			$this->repository->update($data, $id);
			$this->saveAuthors($book, $data['author_id']);
			return true;
		} catch (ValidatorException $e) {
			return [
				'error' => true,
				'message' => $e->getMessageBag()
			];
		}
	}

	private function saveAuthors($book, $authorId)
	{
		return $book->authors()->sync($authorId);
	}
}