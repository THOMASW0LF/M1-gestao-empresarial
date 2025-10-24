@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
    <h1 class="mb-4">Lista de Produtos</h1>

    <div class="row">
        @forelse($produtos as $produto)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($produto->imagem)
                        <img src="{{ asset('storage/'.$produto->imagem) }}" class="card-img-top" alt="Imagem de {{ $produto->nome }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $produto->nome }}</h5>
                        <p class="card-text"></p>
                        <p class="card-text"><strong>R$ {{ number_format($produto->preco, 2, ',', '.') }}</strong></p>
                        <a href="{{ route('admin.produtos.show', $produto->id) }}" class="btn btn-sm btn-primary">Ver</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>Nenhum produto cadastrado.</p>
            </div>
        @endforelse
    </div>
@endsection
