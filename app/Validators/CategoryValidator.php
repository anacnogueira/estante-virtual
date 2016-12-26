<?php

namespace Estante\Validators;

use \Prettus\Validator\LaravelValidator;

class CategoryValidator extends LaravelValidator
{
	protected $rules = [
		'name' => 'required|max:255'
	];

	protected $messages = [
    	'name.required' => "O campo nome é obrigatório.",
	];

}