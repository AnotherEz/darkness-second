<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.home');
    }
    public function inicio()
    {
        return view('home.sections.inicio');
    }

    public function servicios()
    {
        return view('home.sections.servicios');
    }

    public function sobreNosotros()
    {
        return view('home.sections.sobre-nosotros');
    }

    public function contacto()
    {
        return view('home.sections.contacto');
    }
}