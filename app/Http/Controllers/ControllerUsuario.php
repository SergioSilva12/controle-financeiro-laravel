<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ControllerUsuario extends Controller
{
    function index()
    {
        return view("pages.cadastro");
    }

    function cadastrar(Request $request)
    {
        
        $regras = [
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:150|unique:usuarios,email',
            'senha' => 'required|min:6|string',
            'telefone' => 'nullable|string|max:20',
            'aceite_termos' => 'required|accepted'
        ];

        $feedback = [
            'nome.required' => 'O nome é obrigatório.',
            'email.required' => 'O E-mail é obrigatório.',
            'email.email' => 'Informe um E-mail válido.',
            'email.unique' => 'Este E-mail já esta cadastrado.',
            'senha.required' => 'A senha é obrigatório.',
            'senha.min' => 'A senha deve ter no mínimo 6 caracteres.',
            'telefone.size'=>'Tamanho do telefone inválido',
            'aceite_termos.required' => 'Você precisa aceitar os termos de uso.'
        ];

        $request->validate($regras, $feedback);
        
    
        Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone'=>$request->telefone,
            'senha' => Hash::make($request->senha),
            'termos_aceitos_em' => now(),
        ]);
        return redirect()->route('cadastro.index')->with('success', 'Usuario cadastrado com sucesso');


    }
}
