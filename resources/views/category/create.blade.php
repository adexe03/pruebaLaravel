@extends('layouts.master')

@section('content')
<h1>Crear una Categoría</h1>
<form action="{{route('category.store')}}" method="POST">
    @csrf
    <p>
        <label for="">Nombre:</label>
        <input type="text" name="name"
            class="@error('name') border-red-600 @enderror"
            value="{{ old('name')}}">
        @error('name')
            <div class="bg-red-200">
                {{ $message }}
            </div>
        @enderror
    </p>
    <p>
        <input type="submit" value="Crear Categoría">
    </p>
</form>
@endsection
