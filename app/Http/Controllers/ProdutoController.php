<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteProduto;

class ProdutoController extends Controller
{
    // lista produtos (admin/public)
    public function index()
{
    $produtos = SiteProduto::latest()->get();
    return view('pages.produtos.index', compact('produtos'));
}

    // mostra o formulário de criação
    public function create()
    {
        return view('pages.produtos.create'); // arquivo: resources/views/pages/produtos/create.blade.php
    }

    // armazena novo produto (com upload de imagem)
    public function store(Request $request)
    {
        // validação
        $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // 2MB
        ]);

        // salva arquivo em storage/app/public/products
        $file = $request->file('imagem');
        $fileName = time() . '-' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
        $path = $file->storeAs('products', $fileName, 'public'); // disk 'public'

        // cria registro
        $produto = SiteProduto::create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'preco' => $request->input('preco'),
            'imagem' => $path, // salva 'products/arquivo.ext'
        ]);

        return redirect()->route('admin.produtos.create')->with('sucesso', 'Produto cadastrado com sucesso!');

    }

    // mostrar detalhes do produto
    public function show($id)
    {
        $produto = SiteProduto::findOrFail($id);
        return view('pages.produtos.show', compact('produto'));
    }
}