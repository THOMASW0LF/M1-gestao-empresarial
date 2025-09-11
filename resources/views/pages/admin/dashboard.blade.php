@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="mb-4">Dashboard</h1>
    <p>Bem-vindo ao Dashboard.</p>

    <div class="list-group">
        <a href="{{ route('admin.clientes.index') }}" class="list-group-item list-group-item-action list-group-item-primary">
            Gerenciar Clientes
        </a>
        <a href="{{ route('produtos.index') }}" class="list-group-item list-group-item-action list-group-item-secondary">
            Gerenciar Produtos
        </a>
        <a href="{{ route('home') }}" class="list-group-item list-group-item-action list-group-item-custom">
            Voltar ao site 
        </a>
    </div>
@endsection
