<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    // funció de registre amb 4 parametre que envia con la view
    public function signin($str1, $str2, $str3, $str4) {
        $titol = $str1." ".$str2." ".$str3." ".$str4; // Creació d’usuari nou 
        return view("signin")->with('titolLog', $titol);
    }
    // funció de login que rep 3 parametres i envia con la view
    public function signup($str1, $str2, $str3) {
        $titol = $str1." ".$str2." ".$str3; // Iniciar sessió de l’usuari
        return view("signup")->with('titolReg', $titol); // Gestiona els valors passats per URL
    }

    public function signin2() {
        return view('signin');
    }
    public function signup2() {
        return view('signup');
    }
}