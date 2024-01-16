<?php

namespace App\Http\Controllers;

use App\Models\Lista_tareas;
use Illuminate\Http\Request;

class ListaTareasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lista_tareas=lista_tareas::all();
        return view('lista_tareas.index',compact('lista_tareas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required'
        ]);

        $lista_tareas=new lista_tareas;
        $lista_tareas->descripcion=$request->input('descripcion');
        $lista_tareas->observaciones=$request->input('observaciones');
        $lista_tareas->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Lista_tareas $lista_tareas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'descripcion' => 'required'
        ]);

        $lista_tareas=lista_tareas::find($id);
        $lista_tareas->descripcion=$request->input('descripcion');
        $lista_tareas->observaciones=$request->input('observaciones');
        $lista_tareas->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $lista_tareas=lista_tareas::find($id);
        $lista_tareas->delete();
        return redirect()->back();
    }
}
