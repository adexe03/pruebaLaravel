@extends('layouts.master')

@section('content')
<h1>Listado de Categorías</h1>
<p>
    <a href="{{route('category.create')}}">Crear una categoría</a>
</p>
<table>
  <thead>
    <tr>
      <th>id</th>
      <th>Nombre</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>
            <a href="{{ route('category.show', $category)}}">
                {{$category->name}}
            </a>
        </td>
        <td>
            <a href="{{route('category.edit', $category)}}">
                <button>Editar</button>
            </a>
            <form action="{{ route('category.destroy', $category)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Borrar" >
            </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
