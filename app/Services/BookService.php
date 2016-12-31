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
			$this->repository->create($data);

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
			$this->validator->with($data)->passesOrFail();
			$this->repository->update($data, $id);
			return true;
		} catch (ValidatorException $e) {
			return [
				'error' => true,
				'message' => $e->getMessageBag()
			];
		}
	}
}