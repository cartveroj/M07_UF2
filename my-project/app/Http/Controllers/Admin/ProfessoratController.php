<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Professorat;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfessoratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professorat = Professorat::all();
        return view('Admin.Professorat.professorat')->with(['professors' => $professorat]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mostrar formulario para crear un nuevo registro
        return view('Admin.Professorat.CreateProfessorat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $profesorat = new Professorat;
        $profesorat->nom = $request->input('name');
        $profesorat->cognom = $request->input('surname');
        $profesorat->email = $request->input('email');
        
        $profesorat->save();
        
        return redirect('admin_db/professorat')->with('flash_message', 'Professorat añadido!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Professorat $profesorat)
    {
        return view('Admin.Professorat.professorat');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $professorat = Professorat::find($id);
        return view ('Admin.Professorat.EditProfessorat', ['professorat' => $professorat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $professor = Professorat::findOrFail($id);

        $professor->nom = $request->input('nom');
        $professor->cognom = $request->input('cognom');
        $professor->email = $request->input('email');
    
        $professor->save();
    
        return redirect()->route('getProfessorat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $professor = Professorat::findOrFail($id);
        $professor->delete();
        return redirect()->route('getProfessorat')->with('success', 'Professor eliminado correctamente');
    }

}
