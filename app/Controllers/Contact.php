<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function message()
    {
        return view('layout/header').view('contact/message').view('layout/footer');
        
    }

    public function sendMessage(){
        
        $this->load->library("form_validation");
        $teste = 'teste';
        var_dump($teste);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Nome',
            'required|min_length[5]|max_length[150]');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');

        

        if ($this->form_validation->run() == FALSE) {
            $erros = array('mensagens' => validation_errors());
            $this->load->view('/contact/message', $erros);
        } else {
            echo "Formulário enviado com sucesso.";
        }
    }

    public function submission()
    {
        return view('layout/header').view('contact/submission').view('layout/footer');
        
    }

}
