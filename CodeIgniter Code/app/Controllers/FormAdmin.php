<?php

namespace App\Controllers;

use App\Models\Dados_GlossarioModel;

class FormAdmin extends BaseController
{

    public function formAdmin()
    {
        if (session()->has('user')){
            return view('layout/header').view('admin/form').view('layout/footer');
        } else {
            return view('layout/header').view('layout/search').view('home').view('layout/footer');
        }
        
    }

    public function save()
    {
        date_default_timezone_set('America/Sao_Paulo');

        // Validação dos dados informados
        $validacao = $this->validate([
            'termo' => 'required',
            'classe_gramatical' => 'required',
            'definicao' => 'required'
        ],[
            'termo' => [
                'required' => 'É obrigatório preencher um termo.'
            ],
            'classe_gramatical' => [
                'required' => 'É obrigatório preencher uma classe gramatical.'
            ],
            'definicao' => [
                'required' => 'É obrigatório preencher uma definição.'
            ]
        ]);

        if ($validacao){
            // Dados válidos
            $dadosModel = new Dados_GlossarioModel();

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
                'dia' => date('Y-m-d')
            ];

            $dadosModel -> save($dados);

            $result = [
                'success' => true
            ];

            return view('layout/header').view('admin/form', $result).view('layout/footer');
        } else {
            // Dados inválidos retorna input com os dados preenchidos
            return redirect()->back()->withInput()->with('erro', $this->validator);
        };

        
        
    }

    public function update($id_termo){

        $dadosModel = new Dados_GlossarioModel();

        $dados = $dadosModel -> find($id_termo);      

        return view('layout/header').view('admin/form', $dados).view('layout/footer');
    }

    public function delete($id_termo)
    {
        $dadosModel = new Dados_GlossarioModel();

        $dadosModel -> delete($id_termo);

        return view('layout/header').view('layout/search').view('home').view('layout/footer');
        
    }

}
