<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class Clientecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $viewMode = $request->get('view', 'table');

        $query = Cliente::query();

        if ($search) {
            $query->where('nombre', 'like', "%{$search}%")
                  ->orWhere('coreo', 'like', "%{$search}%")
                  ->orWhere('direccion', 'like', "%{$search}%");
        }

        $clientes = $query->paginate(10)->appends($request->query());

        return view('clientes.index', compact('clientes', 'search', 'viewMode'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cliente = null;
        return view('clientes.form', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'coreo' => 'required',
            'direccion' => 'required',
        ]);
        Cliente::create($request->all());
        return redirect()->route('cliente.index')->with('success', 'Cliente creado correctamente');
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
        $cliente = Cliente::findOrFail($id);
        return view('clientes.form', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'coreo' => 'required',
            'direccion' => 'required',
        ]);
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->route('cliente.index')->with('success', 'Cliente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('cliente.index')->with('success', 'Cliente eliminado correctamente');
    }
}
