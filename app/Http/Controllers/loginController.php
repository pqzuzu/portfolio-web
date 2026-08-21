<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class loginController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;




// halaman reigster
    public function register()
    {
        return view('register'); 
    }

    // halaman login
    public function loginPage()
    {
        return view('loginpage');
    }
}