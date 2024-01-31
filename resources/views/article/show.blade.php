@extends('layouts.master')

@section('content')
    <h1>Mostrando el Artículo {{ $article->id }}</h1>
    <h2>{{ $article->name }}</h2>
    <h3>{{ $article->price }}€</h3>
    @if ($article->stock)
        <h4>Hay {{ $article->stock }} unidad/es</h4>
    @else
        <h4>Producto agotado</h4>
    @endif
@endsection
