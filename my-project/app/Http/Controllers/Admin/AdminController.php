<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\ProfessoratController;

class AdminController extends Controller
{
    // Funcions que retornan les views 

    // Funció que retorna les dades dels professors a la view del professorat
    public function professorat() {

        return redirect()->route('getProfessorat');
    }

    // Obte les dades del formulari de inici i comprova que siguin correctes
    public function usuaris(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');

    // Si els valors son iguals a les credencials de Admin, retornara la view admin
        return $email == "obret" && $password == "sesam" 
                         ? view('Admin.admin') : view('signin'); 
    }

    // Aquesta funció retorna a la view de Admin per no surtir al login cada vegada
    public function adminView() {
        return view('Admin.admin');
    }
} 