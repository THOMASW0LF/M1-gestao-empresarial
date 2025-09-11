@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
    <h1 class="mb-4">Lista de Produtos</h1>
    <div class="row">
        @for ($i = 1; $i <= 6; $i++)
            <div class="col-md-4 mb-3">
                @include('components.card-produto', [
                    'titulo' => "Produto $i",
                    'descricao' => "Descrição do Produto $i",
                    'link' => route('produtos.show', $i)
                ])
            </div>
        @endfor
    </div>
@endsection
