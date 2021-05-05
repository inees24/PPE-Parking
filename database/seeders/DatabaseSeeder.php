<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\reservation;
use App\Models\utilisateur;
use App\Models\parking;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        parking::insert(array(
            array(
                'idParking' => 1,
                'numeroPlace'=> '1A',
            ),
            array(
                'idParking' => 2 ,
                'numeroPlace'=> '2A',
            ),
            array(
                'idParking' => 3 ,
                'numeroPlace'=> '3A',
            ),
            array(
                'idParking' => 4 ,
                'numeroPlace'=> '4A',
            ),
            array(
                'idParking' => 5 ,
                'numeroPlace'=> '5A',
            ),
            array(
                'idParking' => 6 ,
                'numeroPlace'=> '6A',
            ),
            array(
                'idParking' => 7 ,
                'numeroPlace'=> '7A',
            ),
            array(
                'idParking' => 8 ,
                'numeroPlace'=> '8A',
            ),
            array(
                'idParking' => 9 ,
                'numeroPlace'=> '9A',
            ),
            array(
                'idParking' => 10 ,
                'numeroPlace'=> '10A',
            ),
        ));
        utilisateur::insert(array(
            array(
                'idUtilisateur' => 1, 'nomUtilisateur' =>'root','nom' =>'root', 'Prenom' => 'root','mail'=>'root.gmail.com', 'motDePasseUtilisateur' => Hash::make('root'), 'estInscrit' => true, 'isAdministrateur' => true ,
            ),
            array(
                'idUtilisateur' => 2, 'nomUtilisateur' => 'bubu','nom' =>'bubu', 'Prenom' => 'bubu','mail'=>'bubu@gmail.com', 'motDePasseUtilisateur' => Hash::make('bubu'), 'estInscrit' => false, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 3, 'nomUtilisateur' => 'toto','nom' =>'toto', 'Prenom' => 'toto','mail'=>'toto@gmail.com', 'motDePasseUtilisateur' => Hash::make('toto'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 4, 'nomUtilisateur' => 'tata','nom' =>'tata', 'Prenom' => 'tata','mail'=>'tata@gmail.com', 'motDePasseUtilisateur' => Hash::make('tata'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 5, 'nomUtilisateur' => 'tutu','nom' =>'tutu', 'Prenom' => 'tutu','mail'=>'tutu@gmail.com', 'motDePasseUtilisateur' => Hash::make('tutu'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 6, 'nomUtilisateur' => 'baba','nom' =>'baba', 'Prenom' => 'baba','mail'=>'baba@gmail.com', 'motDePasseUtilisateur' => Hash::make('baba'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 7, 'nomUtilisateur' => 'fifi','nom' => 'fifi', 'Prenom' => 'fifi','mail'=>'fifi@gmail.com', 'motDePasseUtilisateur' => Hash::make('fifi'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 8, 'nomUtilisateur' => 'fofo','nom' =>'fofo', 'Prenom' => 'fofo','mail'=>'fofo@gmail.com', 'motDePasseUtilisateur' => Hash::make('fofo'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 9, 'nomUtilisateur' => 'fafa','nom' =>'fafa', 'Prenom' => 'fafa','mail'=>'fafa@gmail.com', 'motDePasseUtilisateur' => Hash::make('fafa'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 10, 'nomUtilisateur' => 'nono','nom' =>'nono', 'Prenom' => 'nono','mail'=>'nono@gmail.com', 'motDePasseUtilisateur' => Hash::make('nono'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
        ));
        reservation::insert(array(
            array(
                'idReservation' => 1, 'positionFileAttente' => null , 'numeroPlace' => 4, 'utilisateur' => 4,'etatReservation' => 1, 'dateDebut' => '2020/08/10','dateFin' => '2020/09/10',
            ),
            array(
                'idReservation' => 2, 'positionFileAttente' => null , 'numeroPlace' => 3, 'utilisateur' => 9,'etatReservation' => 0, 'dateDebut' => date('Y-m-d', strtotime('-1 month')),'dateFin' => date('Y-m-d'),
            ),
            array(
                'idReservation' => 3, 'positionFileAttente' => null , 'numeroPlace' => 2, 'utilisateur' => 3,'etatReservation' => 0, 'dateDebut' => date('Y-m-d'), 'dateFin' => date('Y-m-d', strtotime('+1 month')),
            ),
            array(
                'idReservation' => 4, 'positionFileAttente' => null , 'numeroPlace' => 4, 'utilisateur' => 4,'etatReservation' => 0, 'dateDebut' => date('Y-m-d'), 'dateFin' => date('Y-m-d', strtotime('+1 month')),
            ),
            array(
                'idReservation' => 5, 'positionFileAttente' => null , 'numeroPlace' => 1, 'utilisateur' => 5,'etatReservation' => 0, 'dateDebut' => date('Y-m-d'), 'dateFin' => date('Y-m-d', strtotime('+1 month')),
            ),
        ));
    }
}
