@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
    <h1 class="mb-4">Cadastro</h1>
    <form>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Crie uma senha">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <div class="mt-3">
        <a href="{{ route('home') }}" class="btn btn-custom">Voltar para Home</a>
    </div>
@endsection
