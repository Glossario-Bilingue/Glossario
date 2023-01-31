<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function login(){
        $dados = $this->request->getPost();

        var_dump($_POST);
        session()->set([
            'usuario' => 'teste',
            'email'=> 'teste@teste.com'
        ]);
    }

    public function user(){
        if(session()->has('usuario')){
            echo 'existe usuario';
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(site_url('main'));
    }

}