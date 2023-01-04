<?php

namespace App\Controllers;

class Info extends BaseController
{
    public function about()
    {
        return view('layout/header').view('info/about').view('layout/footer');
        
    }

    public function team()
    {
        return view('layout/header').view('info/team').view('layout/footer');
        
    }

}
