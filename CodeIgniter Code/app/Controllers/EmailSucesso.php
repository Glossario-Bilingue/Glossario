<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Email\Email;
use CodeIgniter\HTTP\RequestInterface;

class EmailSucesso extends Controller
{
    public function index()
    {
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

        echo view('template/header', $data);
        echo view('sucesso', $data);
        echo view('template/footer', $data);
        echo view('template/scripts', $data);
    }


}
?>