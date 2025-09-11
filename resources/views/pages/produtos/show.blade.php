@extends('layouts.app')

@section('title', 'Detalhes do Produto')

@section('content')
    <h1 class="mb-4">Detalhes do Produto</h1>

    <div class="card">
        <img src="https://images.tcdn.com.br/img/img_prod/1301312/anuncio_teste_produto_nao_comercializado_teste_interno_teste_15_4717_1_5f01ea6d314dbb2ebf26fd6ba22cabef.png" class="card-img-top" alt="cu">
        <div class="card-body">
            <h5 class="card-title">Produto {{ $id ?? 'Sem Nome' }}</h5>
            <p class="card-text">  
                Descrição.
            </p>
            <a href="{{ url('/produtos') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
@endsection
