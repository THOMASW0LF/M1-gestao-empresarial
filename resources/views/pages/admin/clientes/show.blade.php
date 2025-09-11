@extends('layouts.app')

@section('title', 'Detalhes do Cliente')

@section('content')
    <h1 class="mb-4">Detalhes do Cliente</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Cliente Exemplo</h5>
            <p><strong>Email:</strong> cliente@exemplo.com</p>
            <p><strong>Telefone:</strong> (11) 99999-9999</p>
        </div>
    </div>

    <a href="{{ url('/admin/clientes') }}" class="btn btn-secondary mt-3">Voltar</a>
@endsection
