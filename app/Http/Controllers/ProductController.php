<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return 'LISTA DE PRODUTOS';
    }

    public function create()
    {
        return 'FORMULARIO DE CREAR UN PRODUTO';
    }

    public function detalle()
    {
        return 'DETALLE DEL PRODUTO';
    }
}
