<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function pagina1()
    {
        return view('pagina1');
    }
     public function pagina2()
    {
        return view('pagina2');
    }
}
