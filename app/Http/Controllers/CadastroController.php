<?php

namespace App\Http\Controllers;

use App\Models\SiteCliente;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
     public function salvar(Request $request){
        // validação dos dados 
        $request->validate([
            'nome' => 'required|min:3|max:50',
            'sobrenome' => 'required|min:3|max:50',    
            'cpf' => 'required|digits_between:11,14|unique:site_clientes,cpf', // opcional: validate unique
            'email' => 'required|email|unique:site_clientes,email',
            'cep' => 'required',
            'logradouro' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf' => 'required|string|size:2',
        ]);

        // cria e salva o contanto no banco de dados
        SiteCliente::create($request->all());

        // redirecionamento de volta para a página de contato
        // com uma mensagem de sucesso
        return redirect()->route('home');
    }
}
