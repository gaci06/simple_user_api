@extends('layout')
@section('content')
    <h1>Editar Usuario</h1>
    <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $usuario->nombre) }}" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email', $usuario->email) }}" required><br>

        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('usuarios.index') }}">Volver</a>
@endsection
