<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('app.login');
    }

    public function login(AuthRequest $request)
    {
        // Valida a requisição
        $credentials = $request->validated();

        /*
         * Auth::attempt() = Facade, utilizar dentro de um controller ou services
         * auth()->attempt() = Helper, utilizar dentro de views
         */

        // Tenta autenticar o usuário
        if (Auth::attempt($credentials)) {
            // Redireciona para o dashboard
            return redirect()->route('dashboard')->with('success', 'Login realizado com sucesso!');
        }

        // Se falhar, redireciona de volta com erro
        return back()->withErrors(['email' => 'E-mail ou senha inválidos.'])->withInput();

    }

    public function logout()
    {
        // Faz logout do usuário
        Auth::logout();

        // Redireciona para a página de login
        return redirect()->route('login')->with('success', 'Logout realizado com sucesso!');
    }

}
