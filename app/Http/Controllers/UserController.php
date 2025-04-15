<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Mostra o formulário de criação de usuário
    public function create()
    {
        return view('app.register');
    }

    // Armazena os dados do usuário
    public function store(Request $request)
    {
        // dd($request->all());
        User::create($request->all());

    }

}
