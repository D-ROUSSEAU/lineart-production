<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\NewsletterModel;
use App\Models\MessageModel;

class Home extends Controller
{
    public function index()
    {
        echo view('templates/header');
		echo view('templates/alertes');
        echo view('home');
        echo view('templates/footer');
    }

	public function newsletter()
	{
		helper(['form']);
		if($this->request->getMethod() == 'post') {
			if(!$this->validate('newsletter')) {
				$session = session();
				$session->setFlashdata('error', $this->validator->listErrors());
				return redirect()->to('/');	
			}else{
				$model = new NewsletterModel();
				$email = $this->request->getVar('email');
				$test_email = $model->where('email', $email)->first();
				if(empty($test_email))
				{
					$newData = [
						'email' => $email,
					];
					$model->save($newData);
					$session = session();
					$session->setFlashdata('success', 'Vous êtes abonné à la newsletter avec l\'adresse mail suivante : '.$email.'. Merci pour votre confiance !');
					return redirect()->to('/');
				}else{
					$session = session();
					$session->setFlashdata('error', 'Cette adresse mail est déjà abonée à la newsletter !');
					return redirect()->to('/');
				}
			}
		}
	}

	public function message()
	{
		helper(['form']);
		if($this->request->getMethod() == 'post') {
			if(!$this->validate('message')) {
				$session = session();
				$session->setFlashdata('error', $this->validator->listErrors());
				return redirect()->to('/');
			}else{
				$model = new MessageModel();
				$nom = $this->request->getVar('nom');
				$email = $this->request->getVar('email');
				$message = $this->request->getVar('message');
				$newData = [
					'nom' => $nom,
					'email' => $email,
					'message' => $message,
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Votre message a bien été envoyé, nous vous répondrons par mail');
				return redirect()->to('/');
			}
		}
	}

	public function apropos()
	{
		echo view('templates/header');
		echo view('apropos');
		echo view('templates/footer');
	}
}