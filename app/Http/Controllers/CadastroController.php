<?php

namespace App\Http\Controllers;

use App\Models\SiteCliente;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
     public function salvar(Request $request){
        $request->validate([
            'nome' => 'required|min:3|max:50',
            'sobrenome' => 'required|min:3|max:50',    
            'cpf' => 'required|unique:site_clientes,cpf', 
            'email' => 'required|email|unique:site_clientes,email',
            'cep' => 'required',
            'logradouro' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required|string|size:2',
        ]);

        SiteCliente::create($request->all());

        return redirect()->route('home');
    }
}
