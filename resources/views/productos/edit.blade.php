<!-- resources/views/productos/edit.blade.php -->
@extends('layout')
@section('content')
<h1>Editar Producto</h1>
<form action="{{ route('productos.update', $producto) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" required><br>

    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio" value="{{ $producto->precio }}" required><br>

    <label for="usuario_id">Usuario:</label>
    <select name="usuario_id" id="usuario_id" required>
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}" {{ $producto->usuario_id == $usuario->id ? 'selected' : '' }}>
                {{ $usuario->nombre }}</option>
        @endforeach
    </select><br>

    <label for="marca_id">Seleccionar Marca:</label>
    <select name="marca_id" id="marca_id" required>
        @foreach($marcas as $marca)
            <option value="{{ $marca->id }}" {{ isset($producto) && $producto->marca_id == $marca->id ? 'selected' : '' }}>
                {{ $marca->nombre }}
            </option>
        @endforeach
    </select>

    <label for="imagen">Imagen:</label>
    <input type="file" name="imagen" id="imagen"><br>

    <button type="submit">Actualizar</button>
</form>
@endsection