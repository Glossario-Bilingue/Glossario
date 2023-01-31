<?php

namespace App\Controllers;

use CodeIgniter\Email\Email;
use CodeIgniter\HTTP\RequestInterface;

class Contact extends BaseController
{
    public function message()
    {
        return view('layout/header').view('contact/message').view('layout/footer');
        
    }

    public function sendMessage(){

        helper('form');

        $teste = "teste";
        var_dump($teste);
        
        # Verificar se houve submissão de formulário
        if($this->request->getMethod() != 'post'){
            return redirect()->to(site_url('contact/message'));
        }

        # Validação do formulário
        $validation = $this->validate([
            'name'=> 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        if(!$validation){
            // Erro na validação
            echo 'Formulário inválido';
            return redirect()->back()->withInput();
        } else {
            // Formulário validado
            echo 'Formulário ok';
        }
    }

    public function submission()
    {
        return view('layout/header').view('contact/submission').view('layout/footer');
        
    }

    public function sendEmail()
    {
        $teste = "teste";
        echo($teste);
        var_dump($teste);
        $request = \Config\Services::request();
        if($request->getPost()){

            $nome       = $request->getVar('name');
            $emailform  = $request->getVar('email');
            $mensagem   = $request->getVar('message');

            $email = \Config\Services::email();

            $config['mailType']       = 'html';

            $email->initialize($config);
            $email->setFrom('glossario.informatica@ifrs.edu.br');
            $email->setTo('lyhllo@gmail.com');

            $email->setSubject('Formulário de contato');
            $email->setMessage("<!DOCTYPE html>
                            <html lang='en' dir='ltr'>
                                <head>
                                <meta charset='utf-8'>
                                <title></title>
                                </head>
                                <body>
                                <strong>" . $nome . "</strong><br/>" .
                                "<strong>E-mail:</strong> " . $emailform . "<br/>" .
                                "<strong>Mensagem:</strong> <br/>" . $mensagem .
                            "</body>
                            </html>");
                $email->setAltMessage("Nome: ".$nome."\n\Telefone: ".$telefone."\n\E-mail: ".$emailform."\n\Mensagem: ".$mensagem);

                $email->send();
                //$email->printDebugger();
        }

        //echo view('template/header', $data);
        //echo view('sucesso', $data);
        //echo view('template/footer', $data);
        //echo view('template/scripts', $data);
    }

}
