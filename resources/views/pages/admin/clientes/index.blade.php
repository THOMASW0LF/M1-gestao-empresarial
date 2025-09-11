@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <h1 class="mb-4">Lista de Clientes</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 5; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td>Cliente {{ $i }}</td>
                    <td>cliente{{ $i }}@exemplo.com</td>
                    <td>
                        <a href="{{ url('/admin/clientes/'.$i) }}" class="btn btn-sm btn-info">Ver</a>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
@endsection
