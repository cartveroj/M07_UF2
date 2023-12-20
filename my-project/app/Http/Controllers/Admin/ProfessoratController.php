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
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
        ]);
        // verificamos si los campos son vacios y retorna un mensaje 
        $error = [];
        if(empty($request->input('name'))){
            $error["name"] = "El nom es obligatorio";
        }
        if(empty($request->input('surname'))){
            $error["surname"] = "El apellido es obligatorio";
        }
        if(empty($request->input('email'))){
            $error["email"] = "El email es obligatorio";
        }
        if (count($error) > 0) {

            return redirect()->route('createProfessorat')->withErrors($errors);
        
        }else{
            $profesorat = new Professorat;
            $profesorat->nom = $request->input('name');
            $profesorat->cognom = $request->input('surname');
            $profesorat->email = $request->input('email');
            
            $profesorat->save();
            
            return redirect()->route('getProfessorat')->with('mensaje', "Introducido correctamente");
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // devuelve un registro con el ID especificado. 
        // Si no se encuentra ningún registro, 
        //lanza una excepción ModelNotFoundException.
        $professor = Professorat::findOrFail($id);
        
        return view('Admin.Professorat.ShowProfessorat', ['professor' => $professor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $professorat = Professorat::findOrFail($id);

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
    
        return redirect()->route('getProfessorat')->with('mensaje', "Actualizado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $professor = Professorat::findOrFail($id);
        $professor->delete();
        return redirect()->route('getProfessorat')->with('mensaje', 'Professor eliminado correctamente');
    }

}
