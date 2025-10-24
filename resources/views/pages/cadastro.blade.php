
@extends('layouts.app')

@vite(['resources/js/app.js'])

@section('title', 'Cadastro')

@section('content')
    <h1 class="mb-4">Cadastro</h1>
    <form action="{{ route('cliente.salvar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
        </div>
        <div class="mb-3">
            <label for="sobrenome" class="form-label">Sobrenome</label>
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite seu Sobrenome">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">Cpf</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">Cep</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite seu CEP">
        </div>
        <div class="mb-3">
            <label for="logradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Digite seu logradouro">
        </div>
        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite seu Bairro">
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite sua Cidade">
        </div>
        <div class="mb-3">
            <label for="uf" class="form-label">UF</label>
            <input type="text" class="form-control" id="uf" name="uf" placeholder="Digite seu UF">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <div class="mt-3">
        <a href="{{ route('home') }}" class="btn btn-custom">Voltar para Home</a>
    </div>

@endsection
