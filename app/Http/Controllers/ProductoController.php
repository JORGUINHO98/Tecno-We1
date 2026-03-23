<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $minPrecio = $request->get('min_precio');
        $maxPrecio = $request->get('max_precio');
        $minStock = $request->get('min_stock');
        $viewMode = $request->get('view', 'table');

        $query = Productos::query();

        if ($search) {
            $query->where('nombre', 'like', "%{$search}%")
                  ->orWhere('descripcion', 'like', "%{$search}%");
        }

        if ($minPrecio !== null) {
            $query->where('precio', '>=', $minPrecio);
        }

        if ($maxPrecio !== null) {
            $query->where('precio', '<=', $maxPrecio);
        }

        if ($minStock !== null) {
            $query->where('stock', '>=', $minStock);
        }

        $productos = $query->paginate(10)->appends($request->query());

        return view('productos.index', compact('productos', 'search', 'minPrecio', 'maxPrecio', 'minStock', 'viewMode'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $producto = null;
        return view('productos.form', compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);
        Productos::create($request->all());
        return redirect()->route('producto.index')->with('success', 'Producto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Productos::findOrFail($id);
        return view('productos.form', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);
        $producto = Productos::findOrFail($id);
        $producto->update($request->all());
        return redirect()->route('producto.index')->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Productos::findOrFail($id);
        $producto->delete();
        return redirect()->route('producto.index')->with('success', 'Producto eliminado correctamente');
    }
}
