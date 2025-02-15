@extends('layout')

@section('content')
    <h1>Lista de Productos</h1>
    <a href="{{ route('productos.create') }}">Crear Nuevo Producto</a>
    <ul>
        @foreach($productos as $producto)
            <li>
                <strong>Nombre:</strong> {{ $producto->nombre }} <br>
                <strong>Precio:</strong> ${{ $producto->precio }} <br>
                <strong>Usuario:</strong> {{ $producto->usuario->nombre ?? 'No asignado' }} <br>
                <strong>Marca:</strong> {{ $producto->marca ? $producto->marca->nombre : 'Sin marca' }} <br>
                <a href="{{ route('productos.edit', $producto) }}">Editar</a>
                <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
