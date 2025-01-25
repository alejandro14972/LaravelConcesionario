<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactaController extends Controller
{

    public function store(Request $request)
    {
        return view('contacto.create');
    }

}
