<?php
namespace App\Http\Controllers;

use App\Models\Marca;

use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with('usuario', 'marca')->get();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $marcas = Marca::all();
        $usuarios = Usuario::all(); // Obtener todos los usuarios
        return view('productos.create', compact('usuarios', 'marcas')); // Pasar usuarios a la vista
    }


    public function store(Request $request)
    {
        Producto::create($request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'usuario_id' => 'required|exists:usuarios,id',
            'marca_id' => 'required|exists:marcas,id'
        ]));
        return redirect()->route('productos.index');
    }

    public function edit(Producto $producto)
    {
        $marcas = Marca::all();
        $usuarios = Usuario::all();
        return view('productos.edit', compact('producto', 'usuarios', 'marcas'));
    }

    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'usuario_id' => 'required|exists:usuarios,id',
            'marca_id' => 'required|exists:marcas,id'
        ]));
        return redirect()->route('productos.index');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}