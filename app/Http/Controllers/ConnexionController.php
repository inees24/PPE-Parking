<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConnexionController extends Controller
{
    public function formulaire()
    {
        return view('connexion');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // À faire : vérification que l'email et le mot de passe sont corrects.

        return 'Traitement formulaire connexion';
    }
    public function inscription()
    {
        $req = DB::select('select MAX(numUtilisateur) AS "id" from UTILISATEUR');
        foreach ($req as $reqdata ) {
            $id = $reqdata -> id;
        }
        $id++;
        $nom = $_POST["Nom"];
        $prenom = $_POST["Prenom"];
        $tel = $_POST["Tel"];
        $mail = $_POST["Mail"];
        $adresse = $_POST ["Adresse"];
        $mdp = ["mdp"];
        DB::insert("insert into UTILISATEUR values ('$id', '$mdp', '$nom', '$prenom', '$tel', '$mail', '$adresse')");
        return "ça marche";
    }
}
