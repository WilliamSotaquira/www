<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class GeneralController extends Controller
{
    public function mostrarSomos()
    {
        return view('somos');
    }

    public function mostrarServicio()
    {
        return view('servicio');
    }

    public function mostrarAlianza()
    {
        return view('alianza');
    }

    public function mostrarDocumento()
    {
        return view('documento');
    }

    public function mostrarCliente()
    {
        return view('cliente');
    }

    public function mostrarContacto()
    {
        return view('contacto');
    }
}
