<?php

namespace App\Http\Controllers;
use App\Model\Usuario;
use Illuminate\Http\Request;

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
            'senha' => 'required|min:6|string|confirmed',
            'aceite_termos'=> 'required,accepted'
        ];

        $feedback = [
            'nome.required'=>'O nome é obrigatório.',
            'email.required'=> 'O E-mail é obrigatório.',
            'email.email'=> 'Informe um E-mail válido.',
            'email.unique'=>'Este E-mail já esta cadastrado.',
            'senha.required'=>'A senha é obrigatório.',
            'senha.min'=>'A senha deve ter no mínimo 6 caracteres.',
            'aceite_termos.required'=> 'Você precisa aceitar os termos de uso.'
        ];
    
        Usuario::creeate([
            'nome'=>$request->nome,
            'email'=>$request->email,
            'senha'=>Hash::make($request->senha),

        ]);
        
        return redirect()->route('cadastro.cadastrar')->with('success','Usuario cadastrado com sucesso');
    
        
    }
}
