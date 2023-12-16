<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumnat;
use Illuminate\Http\Request;

class AlumnatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Hace un get de alumnos
        $alumnes = Alumnat::all();

        //retorna a la vista alumnat con los resultados
        return view('Admin.Alumnat.alumnes', ['alumnes' => $alumnes] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //fichero de view con el formulario
        return view('Admin.Alumnat.createAlumnat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        //comprueba los campos del formulario
        $request->validate([
            'nom' => 'required|string',
            'cognom' => 'required|string',
            'email' => 'required|email|unique:alumnat,email',
        ]);

        //guardar a la tabla.Laravel gestiona la consulta de guardar les dades del formulari a la taula especificada en el projecte de Laravel
        // Crear un nuevo modelo Alumnat con los datos del formulario
        Alumnat::create([
            'nom' => $request->input('nom'),
            'cognom' => $request->input('cognom'),
            'email' => $request->input('email'),
        ]);
        return view('Admin.Alumnat.createAlumnat');
        // return view('Admin.Alumnat.createAlumnat')->with('success', 'Alumne afegit correctament');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumnat $alumnat)
    {
        //la funcion show() sirve para mostrar los detalles de uno en especifico, puede buscarse por id 
        // Obtiene todos los alumnos
        $alumnes = Alumnat::all();
        return view('Admin.Alumnat.alumnes', ['alumnes' => $alumnes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumnat $alumnat)
    {
        return view('Admin.Alumnat.updateAlumnat', ['alumnat' => $alumnat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumnat $alumnat)
    {
        // Valida los datos del formulario
        //sometimes|required => el campo es requerido pero no es necesario cambiar el valor
        $request->validate([
            'name' => 'sometimes|required|string',
            'surname' => 'sometimes|required|string',
            'email' => 'sometimes|required|email',
        ]);

        // Busca el modelo Alumnat por id
        $alumne = Alumnat::findOrFail($id);

        // Actualiza los campos del modelo con los datos del formulario
        $alumne->name = $request->input('nom', $alumne->nom);
        $alumne->surname = $request->input('cognom', $alumne->cognom);
        $alumne->email = $request->input('email', $alumne->email);

        // Guarda los cambios en la base de datos
        $alumne->save();

        // Redirige a la view 
        return redirect()->route('nombre_de_la_ruta_despues_de_actualizar', $alumne->id)
            ->with('success', '¡Se ha actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumne = Alumnat::findOrFail($id);
        $alumne->delete();

        return redirect()->route('getAlumnat');
    }
}
