<?php

namespace App\Http\Controllers;

use App\Models\Dentista;
use Illuminate\Http\Request;

class DentistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dentistas()
    {
        return view('dentistas');
    }

    public function index()
    {
        $dentistas = Dentista::all();
        return view('dentistasIndex', compact('dentistas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dentistasCreate');
    }

    public function edit()
    {
        return view('dentistasEdit');


    }

    public function store()
    {
        $dentista = new Dentista();

        $dentista->nombre = request('nombre');
        $dentista->apellido = request('apellido');
        $dentista->DNI = request('DNI');
        $dentista->fecha_nacimiento = request('fecha_nacimiento');
        $dentista->en_vacaciones = request('en_vacaciones');

        $dentista->save();

        return redirect('/dentistas');
    }

   
    public function show(Dentista $dentista)
    {
        //
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dentista $dentista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dentista = Dentista::find($id);
        $dentista->delete();

        return redirect('/dentistas/index');
    }
}
