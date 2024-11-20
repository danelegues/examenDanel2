<?php

namespace App\Http\Controllers;
use App\Models\Dentista;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function clientes()
    {
        return view('clientes');
    }

    public function index()
    {
    
        $dentistas = Dentista::all();
        $clientes = Cliente::all();
        return view('clienteIndex', compact('clientes', 'dentistas'));
    }

    
    public function create()
    {
        return view('clienteCrear');
    }

   
    public function store()
    {
        $cliente = new Cliente();

        $cliente->nombre = request('nombre');
        $cliente->apellido = request('apellido');
        $cliente->DNI = request('DNI');
        $cliente->fecha_nacimiento = request('fecha_nacimiento');
        

        $cliente->save();

        return redirect('/clientes');
    }

    
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
