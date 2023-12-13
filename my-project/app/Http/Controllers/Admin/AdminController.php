<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Funcions que retornan les views 
    public function centres() {
        // Array dels centres que retornarà el controlador a la view de centres
        $centres = array(
            array(
                "id" => "1",
                "nom" => "Institut TIC de Barcelona", 
                "adreça" => "C\ de Sancho de Ávila, 133", 
                "codipost" => "08918",
                "ciutat" => "Barcelona"
            ),
            array(
                "id" => "2",
                "nom" => "Joan d\'Àustria", 
                "adreça" => "C\ Selva de Mar, 211", 
                "codipost" => "08020",
                "ciutat" => "Barcelona"
            ),
        );
        return view('Admin.centres')->with(['centres' => $centres]);
    }

    // Funció que retorna les dades dels professors a la view del professorat
    public function professorat() {
        $professors = array(
            array(
                "id" => "1",
                "nom" => "Roger",  
                "cognom" => "Sobrino",
                "rol" => "Professor",
                "email" => "roger@roger.com",
            ),
            array(
                "id" => "2",
                "nom" => "Sara",  
                "cognom" => "Gonzalez",
                "rol" => "Professora",
                "email" => "sara@sara.com",
            ),
            array(
                "id" => "3",
                "nom" => "Pere",  
                "cognom" => "Guitart",
                "rol" => "Professor",
                "email" => "pere@pere.com",
            ),
            array(
                "id" => "4",
                "nom" => "Oriol",  
                "cognom" => "Xisco",
                "rol" => "Professor",
                "email" => "sara@sara.com",
            ),
        );
        return view('Admin.professorat')->with(['professors' => $professors ]);     
    }

    // Funció que té un array de alumnes i retorna els valor a la view de Admin
    public function alumnat() {
        $alumnes = array(
            array(
                "id" => "1",
                "nom" => "Carles",  
                "cognom" => "Canals",
                "rol" => "Alumne",
                "email" => "carles@carles.com",
            ),
            array(
                "id" => "2",
                "nom" => "Sofia",  
                "cognom" => "Taraco",
                "rol" => "Alumne",
                "email" => "sofia@sofia.com",
            ),
            array(
                "id" => "3",
                "nom" => "Francesc",  
                "cognom" => "Riugal",
                "rol" => "Alumne",
                "email" => "fran@fran.com",
            ),
            array(
                "id" => "4",
                "nom" => "Laia",  
                "cognom" => "Ibañez",
                "rol" => "Alumne",
                "email" => "laia@laia.com",
            ),
        );
        return view('Admin.alumnes')->with(['alumnes' => $alumnes]);
    }

    // Obte les dades del formulari de inici i comprova que siguin correctes
    public function usuaris(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');

    // Si els valors son iguals a les credencials de Admin, retornara la view admin
        return $email == "orojas@iticbcn.cat" && $password == "12345" 
                         ? view('Admin.admin') : view('signin'); 
    }

    // Aquesta funció retorna a la view de Admin per no surtir al login cada vegada
    public function adminView() {
        return view('Admin.admin');
    }
} 