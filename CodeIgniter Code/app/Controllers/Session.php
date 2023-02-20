<?php

namespace App\Controllers;

use App\Models\Dados_AdminModel;

class Session extends BaseController
{
    public function loginForm()
    {

        return view('layout/header').view('admin/loginForm').view('layout/footer');
        
    }

    public function login(){

        date_default_timezone_set('America/Sao_Paulo');

        $adminModel = new Dados_AdminModel();

        $dados = [
            'email' => $this -> request -> getPost('email'),
            'senha' => $this -> request -> getPost('senha')
        ];

        $acesso = $adminModel -> validaLogin($dados);

        //var_dump($acesso['dados']);

        if (isset($acesso[0])){
            // Login com sucesso
            $dadosSessao = [
                'id_user' => $acesso[0]['id_admin'],
                'user' => 'Admin',
                'acesso' => date('Y-m-d')
            ];

            session() -> set($dadosSessao);

            $retorno = [
                'erro' => false,
                'message'=> 'Login realizado com sucesso',
                'data' => $acesso[0]['data_acesso'],
                'hora' => $acesso[0]['hora_acesso']
            ];
            return view('layout/header').view('layout/search').view('/home', $retorno).view('layout/footer');
        } else {
            // Login inválido retorna erro
            $retorno = [
                'erro' => true
            ];
            return view('layout/header').view('/admin/loginForm', $retorno).view('layout/footer');
        };
        
    }

    public function logout(){
        session()->destroy();

        $retorno = [
            'erro' => false,
            'message'=> 'Logout realizado com sucesso'
        ];
        return view('layout/header').view('layout/search').view('/home', $retorno).view('layout/footer');
    }

}