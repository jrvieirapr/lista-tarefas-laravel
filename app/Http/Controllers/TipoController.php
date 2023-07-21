<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use App\Http\Requests\StoreTipoRequest;
use App\Http\Requests\UpdateTipoRequest;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    
        $tipos = Tipo::all();
        return view ('tipos.tipos',compact(['tipos']));        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('tipos.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipoRequest $request)
    {
        $data = $request->all();
        $tipo = Tipo::create($data); 
	    return redirect()->route('tipos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipo $tipo)
    {
        return view ('tipos.show',compact(['tipo'])); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tipo $tipo)
    {
        return view ('tipos.edit',compact(['tipo']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipoRequest $request, Tipo $tipo)
    {
        $data = $request->all();
        $tipo->update($data); 
	    return redirect()->route('tipos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipo $tipo)
    {
        $tipo->delete(); 
	    return redirect()->route('tipos.index');
    }
}
