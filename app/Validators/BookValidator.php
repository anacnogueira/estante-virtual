<?php

namespace Estante\Validators;

use \Prettus\Validator\LaravelValidator;

class BookValidator extends LaravelValidator
{
	protected $rules = [
		'title' => 'required|max:255',
		'category_id' => 'required|integer',

	];

	protected $messages = [
    	'title.required' => "O campo título é obrigatório.",
    	'category_id.required' => "O campo categoria é obrigatório.",
	];

}