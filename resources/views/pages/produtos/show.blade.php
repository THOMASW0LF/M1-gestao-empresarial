@extends('layouts.app')

@section('title', $produto->nome )

@section('content')
    <div class="card">
        @if($produto->imagem)
            <img src="{{ asset('storage/'.$produto->imagem) }}" class="card-img-top" alt="{{ $produto->nome }}">
        @endif
        <div class="card-body">
            <h3>{{ $produto->nome }}</h3>
            <p>{{ $produto->descricao }}</p>
            <p><strong>R$ {{ number_format($produto->preco,2,',','.') }}</strong></p>
        </div>
    </div>
@endsection
