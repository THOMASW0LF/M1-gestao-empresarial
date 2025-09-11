@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- Hero / Banner principal --}}
    <div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
        <div class="container py-5 text-center">
            <h1 class="display-5 fw-bold text-primary">Bona Store 2</h1>
            <p class="fs-4">Temos TODOS os produtos, TODOS!</p>
            <a href="{{ route('produtos.index') }}" class="btn btn-custom btn-lg mt-3">Explorar Produtos</a>
        </div>
    </div>
@endsection