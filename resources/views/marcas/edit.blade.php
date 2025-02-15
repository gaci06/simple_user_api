@extends('layout')

@section('content')
    <h1>Editar Marca</h1>
    <form action="{{ route('marcas.update', $marca) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre de la Marca:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $marca->nombre }}" required>
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('marcas.index') }}">Volver a la lista de marcas</a>
@endsection
