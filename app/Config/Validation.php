<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

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
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
		\App\Validation\UserRules::class,
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

	public $newsletter = [
		'email' => [
			'rules' => 'required|max_length[255]|valid_email',
			'errors' => [
				'required' => 'Veuillez renseigner une adresse mail avant de vous abonner à la newsletter',
				'max_length' => 'Votre adresse mail est trop longue (plus de 255 caractères)',
				'valid_email' => 'Veuillez renseigner une adresse mail valide avant de vous abonner à la newsletter'
			]
		]
	];

	public $message = [
		'nom' => [
			'rules' => 'required|max_length[255]',
			'errors' => [
				'required' => 'Veuillez renseigner votre nom/prénom avant d\'envoyer votre message',
				'max_length' => 'Votre nom/prénom est trop long (plus de 255 caractères)'
			]
		],
		'email' => [
			'rules' => 'required|max_length[255]|valid_email',
			'errors' => [
				'required' => 'Veuillez renseigner votre adresse mail avant d\'envoyer votre message',
				'max_length' => 'Votre adresse mail est trop longue (plus de 255 caractères)',
				'valid_email' => 'Veuillez renseigner une adresse mail valide avant d\'envoyer votre message'
			]
		],
		'message' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Veuillez ne pas laisser le message vide avant de l\'envoyer'
			]
		]
	];
	
}
