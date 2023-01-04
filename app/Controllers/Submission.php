<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function message()
    {
        return view('layout/header').view('contact/message').view('layout/footer');
        
    }

    public function validMessage(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Nome', 'required|min_length[5]|max_length[150]');

        if ($this->form_validation->run() == FALSE){
            $errors = array('mensagens' => validation_errors());
            var_dump($erros);
            $this->load->view('layout/header').view('contact/message', $errors).view('layout/footer');
        } else {
            echo "Formulário enviado com sucesso.";
        }
    }

    public function submission()
    {
        return view('layout/header').view('contact/submission').view('layout/footer');
        
    }

}
