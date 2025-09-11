@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h1 class="mb-4">Login</h1>
    <form>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
        </div>
    </form>

    <a href="{{ route('home') }}" class="btn btn-custom">Entrar</a>

    <div class="mt-3">
        <a href="{{ route('cadastro') }}" class="btn btn-secondary">Criar conta</a>
    </div>
@endsection
