@extends('layout')
@section('content')
<h1>Crear Producto</h1>
<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required><br>

    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio" required><br>

    <label for="usuario_id">Usuario:</label>
    <select name="usuario_id" id="usuario_id" required>
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
        @endforeach
    </select><br>
    <label for="marca_id">Seleccionar Marca:</label>
    <label for="marca_id">Marca:</label>
<select name="marca_id" required>
    <option value="">Seleccione una marca</option>
    @foreach($marcas as $marca)
        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
    @endforeach
</select>


    <button type="submit">Crear</button>
</form>
<a href="{{ route('productos.index') }}">Volver</a>
@endsection