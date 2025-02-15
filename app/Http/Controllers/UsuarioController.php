<?php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
{
    $usuarios = Usuario::all(); // Obtener todos los usuarios
    return view('usuarios.create', compact('usuarios')); // Pasar usuarios a la vista
}


    public function store(Request $request)
    {
        Usuario::create($request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:usuarios'
        ]));
        return redirect()->route('usuarios.index');
    }

    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $usuario->update($request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:usuarios,email,' . $usuario->id
        ]));
        return redirect()->route('usuarios.index');
    }
    public function show(Usuario $usuario)
{
    return view('usuarios.show', compact('usuario'));
}



    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}