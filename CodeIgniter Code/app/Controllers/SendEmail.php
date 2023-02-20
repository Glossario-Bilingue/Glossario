<?php

namespace App\Controllers;

class SendEmail extends BaseController
{

	public function sendEmailSubmission(){

		date_default_timezone_set('America/Sao_Paulo');
		$email = \Config\Services::email();

		$emailFrom = $this -> request -> getPost('email');

		if (!isset($emailFrom)){
			$emailFrom = "glossario.informatica@farroupilha.ifrs.edu.br";
		};

		$emailName = $this->request->getPost('name');

		if (!isset($emailName)){
			$emailName = "";
		}

		$dados = [
			'id_termo' => $this -> request -> getPost('id_termo'),
			'termo' => $this -> request -> getPost('termo'),
			'sigla' => $this -> request -> getPost('sigla'),
			'classe' => $this -> request -> getPost('classe_gramatical'),
			'plural' => $this -> request -> getPost('plural'),
			'traducao' => $this -> request -> getPost('forma_equivalente'),
			'definicao' => $this -> request -> getPost('definicao'),
			'area' => $this -> request -> getPost('area'),
			'referencia' => $this -> request -> getPost('referencia'),
			'autor' => $this -> request -> getPost('autor'),
			'email' => $emailFrom,
			'dia' => date('d-m-Y')
		];

		var_dump($dados);
		
		$email->setFrom($emailFrom, $emailName);
		$email->setTo('glossario.informatica@farroupilha.ifrs.edu.br');
		
		$template = view('contact/emailSubmission', $dados);
		
		$email->setSubject('Nova sugestão de termo enviada pelo site do Glossário Bilíngue');
		
		$email->setMessage($template);
		
		$sent = $email->send();
		
		if ($sent){
			$return =[
				'erro'=> false,
				'message' => 'Sugestão enviada com sucesso'
			];
			return view('layout/header').view('layout/search').view('home', $return).view('layout/footer');
		} else {
			return redirect()->back()->withInput()->with('erro', true);
		};

	}

	public function sendEmailMessage(){

		// Validação dos dados informados
        $validacao = $this->validate([
            'name' => 'required',
            'email' => 'required|valid_email',
            'message' => 'required'
        ],[
            'name' => [
                'required' => 'É obrigatório preencher um nome.'
            ],
            'email' => [
                'required' => 'É obrigatório preencher um e-mail.',
				'valid_email' => 'E-mail inválido.'
            ],
            'message' => [
                'required' => 'É obrigatório preencher uma mensagem.'
            ]
        ]);

		if ($validacao){
            // Dados válidos

            $dados = [
                'name' => $this -> request -> getPost('name'),
                'email' => $this -> request -> getPost('email'),
                'message' => $this -> request -> getPost('message'),
                'dia' => date('Y-m-d')
            ];

            date_default_timezone_set('America/Sao_Paulo');
			$email = \Config\Services::email();

			$dados = [
				'email' => $this -> request -> getPost('email'),
				'name' => $this -> request -> getPost('name'),
				'message' => $this -> request -> getPost('message'),
				'dia' => date('d-m-Y')
			];
			
			$email->setFrom($this -> request -> getPost('email'), $this -> request -> getPost('name'));
			$email->setTo('glossario.informatica@farroupilha.ifrs.edu.br');
			
			$template = view('contact/emailMessage', $dados);
			
			$email->setSubject('Nova mensagem enviada pelo site do Glossário Bilíngue');
			
			$email->setMessage($template);
			
			$sent = $email->send();
			
			if ($sent){
				$return =[
					'erro'=> false,
					'message' => 'Mensagem enviada com sucesso'
				];
				return view('layout/header').view('layout/search').view('home', $return).view('layout/footer');
			} else {
				return redirect()->back()->withInput()->with('erro', 'Erro ao enviar mensagem.');
			};
        } else {
            // Dados inválidos retorna input com os dados preenchidos
            return redirect()->back()->withInput()->with('erro', $this->validator);
        };

	}
	
}