@extends('layouts.app')

@section('title', 'Login Administrativo')

@section('content')
    <h1 class="mb-4">Login Administrativo</h1>
    <form>
        <div class="mb-3">
            <label for="email_admin" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email_admin" placeholder="Digite seu e-mail">
        </div>
        <div class="mb-3">
            <label for="senha_admin" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha_admin" placeholder="Digite sua senha">
        </div>
    </form>

    <a href="{{ route('admin.dashboard') }}" class="btn btn-custom">Entrar(Dashboard)</a>
@endsection
