<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function message()
    {
        return view('layout/header').view('contact/message').view('layout/footer');
        
    }

    public function submitSugestion(){
        
    }

    public function submission()
    {
        return view('layout/header').view('contact/submission').view('layout/footer');
        
    }

}
