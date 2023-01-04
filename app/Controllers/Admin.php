<?php

namespace App\Controllers;

use App\Models\Dados_GlossarioModel;

class Admin extends BaseController
{
    public function login()
    {
        return view('layout/header').view('admin/login').view('layout/footer');
        
    }

    public function form()
    {
        helper('form');
        return view('layout/header').view('admin/form').view('layout/footer');
        
    }

    public function save()
    {
        $dados = $this -> request -> getPost();

        dd($dados);
    }

}
