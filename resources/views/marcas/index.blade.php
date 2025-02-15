@extends('layout')

@section('content')
    <h1>Lista de Marcas</h1>
    <a href="{{ route('marcas.create') }}">Crear Nueva Marca</a>
    <ul>
        @foreach($marcas as $marca)
            <li>
                {{ $marca->nombre }}
                <a href="{{ route('marcas.edit', $marca) }}">Editar</a>
                <form action="{{ route('marcas.destroy', $marca) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
