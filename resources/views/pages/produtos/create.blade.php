@extends('layouts.app')

@vite(['resources/js/app.js'])

@section('title', 'Cadastro de Produtos')

@section('content')
    <h1 class="mb-4">Cadastro de produtos</h1>

    @if(session('sucesso'))
        <div class="alert alert-success">{{ session('sucesso') }}</div>
    @endif

    <form action="{{ route('admin.produtos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input name="nome" id="nome" type="text" class="form-control" value="{{ old('nome') }}" required>
            @error('nome') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input name="preco" id="preco" type="text" class="form-control" value="{{ old('preco') }}" required>
            @error('preco') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" rows="4" required>{{ old('descricao') }}</textarea>
            @error('descricao') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem do produto</label>
            <input name="imagem" id="imagem" type="file" class="form-control" accept="image/*" required>
            @error('imagem') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <div class="mt-3">
        <a href="{{ route('home') }}" class="btn btn-custom">Voltar para Home</a>
    </div>
@endsection
