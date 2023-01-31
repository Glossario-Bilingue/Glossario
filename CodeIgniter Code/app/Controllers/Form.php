<?php

namespace App\Controllers;

use App\Models\Dados_GlossarioModel;

class Form extends BaseController
{
    public function datavalidation(){
        echo 'teste validação';
    }

    public function save()
    {
        $dadosModel = new Dados_GlossarioModel();

        $dados = $this -> request -> getPost();

        $dados = [
            'termo' => $this -> request -> getPost('termo'),
            'sigla' => $this -> request -> getPost('sigla'),
            'classe' => $this -> request -> getPost('classe_gramatical'),
            'plural' => $this -> request -> getPost('plural'),
            'traducao' => $this -> request -> getPost('forma_equivalente'),
            'definicao' => $this -> request -> getPost('definicao'),
            'area' => $this -> request -> getPost('area')
        ];

        $dadosModel -> save($dados);
        
    }

}
