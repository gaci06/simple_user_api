@extends('layout')

@section('content')
    <h1>Crear Marca</h1>
    <form action="{{ route('marcas.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre de la Marca:</label>
        <input type="text" name="nombre" id="nombre" required>
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('marcas.index') }}">Volver a la lista de marcas</a>
@endsection