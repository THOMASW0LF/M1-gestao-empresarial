<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteProduto;

class ProdutoController extends Controller
{
    public function index()
{
    $produtos = SiteProduto::latest()->get();
    return view('pages.produtos.index', compact('produtos'));
}

    public function create()
    {
        return view('pages.produtos.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $file = $request->file('imagem');
        $fileName = time() . '-' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
        $path = $file->storeAs('products', $fileName, 'public'); 

        $produto = SiteProduto::create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'preco' => $request->input('preco'),
            'imagem' => $path, 
        ]);

        return redirect()->route('admin.produtos.create')->with('sucesso', 'Produto cadastrado com sucesso!');

    }

    public function show($id)
    {
        $produto = SiteProduto::findOrFail($id);
        return view('pages.produtos.show', compact('produto'));
    }
}