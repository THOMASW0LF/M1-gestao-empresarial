@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <h1 class="mb-4">Lista de Clientes</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($clientes as $cliente)   
                            <tr>
                                <th scope="row">{{ $cliente->id }}</th>
                                <td>{{ $cliente -> nome }}</td>
                                <td>{{ $cliente -> sobrenome }}</td>
                                <td>{{ $cliente -> email }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Nenhum cliente cadastrado.</td>
                            </tr>
                        @endforelse
        </tbody>
    </table>
@endsection
