<?php

namespace App\Controllers;

use App\Models\Dados_GlossarioModel;

class Result extends BaseController
{

    public function list($termo)
    {
        $dadosModel = new Dados_GlossarioModel();

        $dados = $dadosModel -> searchTerm($termo);

        $dados = [
            'dados' => $dados
        ];
        
        return view('layout/header').view('results/list', $dados).view('layout/footer');
        
    }

    public function search()
    {
        $dadosModel = new Dados_GlossarioModel();

        $termo = $_POST['pesquisa'];

        $dados = $dadosModel -> searchTerm(trim($termo)); # passa o termo como parâmetro sem espaçamentos no início e no fim

        $dados = [
            'dados' => $dados
        ];

        if (!empty($dados['dados'])){
            return view('layout/header').view('results/list', $dados).view('layout/footer');
        } else
        {
            return view('layout/header').view('messages/not_found').view('layout/footer');
        }
        
    }

    public function definition($idTermo)
    {
        $dadosModel = new Dados_GlossarioModel();

        $dados = $dadosModel -> find($idTermo);      

        $dados = [
            'dados' => $dados
        ];

        return view('layout/header').view('results/definition', $dados).view('layout/footer');
        
    }

}
