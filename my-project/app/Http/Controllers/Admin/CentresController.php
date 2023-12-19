<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Centre;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CentresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        // Mostra tots els centres
        return view('Admin.Centres.centres', ['centres' => Centre::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        // mostra la vista del formulari de registre
        return view('Admin.Centres.formCentres');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $centre = new Centre;
        // Assignació de dades del formulari a variables
        $centre->nom = $request->input('name');
        $centre->adreça = $request->input('address');
        $centre->cp = $request->input('cp');
        $centre->ciutat = $request->input('city');

        // desar la informació de l'objecte de centre a la taula
        $centre->save();
        return redirect()->route('getCentres');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {
        // cerca un centre per el ID
        $centre = Centre::find($id);
        return view('Admin.Centres.showCentre', ['centre' => $centre]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        // mostra el formulari per editar les dades del centre
        $centre = Centre::find($id);
        return view('Admin.Centres.updateCentres', ['centres' => $centre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        // Obté un centre per el ID i edita els seus camps
        $centre = Centre::find($id);
        $centre->nom = $request->input('name');
        $centre->adreça = $request->input('address');
        $centre->cp = $request->input('cp');
        $centre->ciutat = $request->input('city');

        $centre->save();
        return redirect()->route('getCentres');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        //
        $centre = Centre::find($id);
        $centre->delete();
        return redirect()->route('getCentres');
    }
}