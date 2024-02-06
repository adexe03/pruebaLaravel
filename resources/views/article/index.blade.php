@extends('layouts.master')

@section('content')
    <h1>Listado de articulos</h1>
    <p>
        <a href="{{ route('article.create') }}">Crear un artículo</a>
    </p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>
                        <a href="{{ route('article.show', $article) }}">
                            {{ $article->name }}
                        </a>
                    </td>
                    <td>{{ $article->price }}€</td>
                    <td>{{ $article->stock }}</td>
                    <td>
                        <a href="{{ route('article.edit', $article) }}"></a>
                        <button>Editar</button>
                        <form method="POST" action="{{ route('article.destroy', $article) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
