@extends('layouts.master')

@section('content')
    <h1>Mostrando el Artículo {{ $article->id }}</h1>
    <h2>{{ $article->name }}</h2>
    <h3>{{ $article->price }}€</h3>
    <form action="{{ route('article.destroy', $article) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar artículo" class="bg-red-300">
    </form>
    @if ($article->stock)
        <h4>Hay {{ $article->stock }} unidad/es</h4>
    @else
        <h4>Producto agotado</h4>
    @endif
@endsection
