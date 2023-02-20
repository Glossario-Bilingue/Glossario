<?php

namespace App\Controllers;

use CodeIgniter\Email\Email;
use CodeIgniter\HTTP\RequestInterface;

class Contact extends BaseController
{
    public function message()
    {
        return view('layout/header').view('contact/message').view('layout/footer');
        
    }

    public function submission()
    {
        return view('layout/header').view('contact/submission').view('layout/footer');
        
    }
}
