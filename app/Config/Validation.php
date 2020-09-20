<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	/**
	 * Register
	 */
	public $register = [
		'username'			=> [
			'rules' => 'required|min_length[5]',
		],
		'password'			=> [
			'rules' => 'required',
		],
		'repeatPassword'	=> [
			'rules' => 'required|matches[password]',
		],
	];
	public $register_errors = [
		'username' => [
			'required' 	=> '{field} Harus diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus diisi',
		],
		'repeatPassword' => [
			'required'	=> '{field} Harus diisi',
			'matches'	=> '{field} Tidak Match dengan Password'
		]
	];

	/**
	 * Login
	 */
	public $login = [
		'username'			=> [
			'rules' => 'required|min_length[5]',
		],
		'password'			=> [
			'rules' => 'required',
		],
	];
	public $login_errors = [
		'username' => [
			'required' 	=> '{field} Harus diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus diisi',
		],
	];
}
