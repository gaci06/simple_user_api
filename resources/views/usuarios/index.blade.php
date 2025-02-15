@extends('layout')
@section('content')
    <h1>Usuarios</h1>
    <a href="{{ route('usuarios.create') }}">Crear Usuario</a>
    <ul>
        @foreach($usuarios as $usuario)
            <li>{{ $usuario->nombre }} ({{ $usuario->email }})
                <a href="{{ route('usuarios.edit', $usuario) }}">Editar</a>
                <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
