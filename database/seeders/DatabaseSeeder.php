<?php

namespace Database\Seeders;

use App\Models\place;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        place::insert(array(
            array(
                'id' => 1,
                'timestamps'=> '1A',
            ),
            array(
                'id' => 2 ,
                'timestamps'=> '2A',
            ),
            array(
                'id' => 3 ,
                'timestamps'=> '3A',
            ),
            array(
                'id' => 4 ,
                'timestamps'=> '4A',
            ),
            array(
                'id' => 5 ,
                'timestamps'=> '5A',
            ),
            array(
                'id' => 6 ,
                'timestamps'=> '6A',
            ),
            array(
                'id' => 7 ,
                'timestamps'=> '7A',
            ),
            array(
                'id' => 8 ,
                'timestamps'=> '8A',
            ),
            array(
                'id' => 9 ,
                'timestamps'=> '9A',
            ),
            array(
                'id' => 10 ,
                'timestamps'=> '10A',
            ),
        ));
        Utilisateur::insert(array(
            array(
                'idUtilisateur' => 1,'mdp'=>Hash::make('123456') ,'nom' =>'toto', 'prenom' => 'toto','tel'=>'0612345678','mail'=>'toto@gmail.com','adresse'=>'5 rue du soleil' ,'cp'=>'12345','estAdmin' => true ,'Liste-attente'=>'1',
            ),
            array(
                'idUtilisateur' => 2,'mdp'=>Hash::make('123456') ,'nom' =>'tata', 'prenom' => 'tata','tel'=>'0651515151','mail'=>'tata@gmail.com','adresse'=>'4 rue du ciel' ,'cp'=>'11111' ,'estAdmin' => false ,'Liste-attente'=>'2',
            ),
            array(
                'idUtilisateur' => 3,'mdp'=>Hash::make('123456') ,'nom' =>'tutu', 'prenom' => 'tutu','tel'=>'0654964654','mail'=>'tutu@gmail.com','adresse'=>'24 rue de la lune' ,'cp'=>'22222' ,'estAdmin' => false ,'Liste-attente'=>'3',
            ),
            array(
                'idUtilisateur' => 4,'mdp'=>Hash::make('123456') ,'nom' =>'titi', 'prenom' => 'titi','tel'=>'0651321654','mail'=>'titi@gmail.com','adresse'=>'25 rue de la foudre' ,'cp'=>'33333' ,'estAdmin' => false ,'Liste-attente'=>'4',
            ),
            array(
                'idUtilisateur' => 5,'mdp'=>Hash::make('123456') ,'nom' =>'bobo', 'prenom' => 'bobo','tel'=>'0651651954','mail'=>'bobo@gmail.com','adresse'=>'7 rue des nuages' ,'cp'=>'44444' ,'estAdmin' => false ,'Liste-attente'=>'0',
            ),
            array(
                'idUtilisateur' => 6,'mdp'=>Hash::make('123456') ,'nom' =>'baba', 'prenom' => 'baba','tel'=>'0651561546','mail'=>'baba@gmail.com','adresse'=>'12 avenue de Paris' ,'cp'=>'55555' ,'estAdmin' => false ,'Liste-attente'=>'0',
            ),
            array(
                'idUtilisateur' => 7,'mdp'=>Hash::make('123456') ,'nom' =>'bubu', 'prenom' => 'bubu','tel'=>'0654161321','mail'=>'bubu@gmail.com','adresse'=>'10 rue des fleurs' ,'cp'=>'66666' ,'estAdmin' => false ,'Liste-attente'=>'0',
            ),
            array(
                'idUtilisateur' => 8,'mdp'=>Hash::make('123456') ,'nom' =>'bibi', 'prenom' => 'bibi','tel'=>'0654165161','mail'=>'bibi@gmail.com','adresse'=>'9 rue de la pomme' ,'cp'=>'77777' ,'estAdmin' => false ,'Liste-attente'=>'0',
            ),
            array(
                'idUtilisateur' => 9,'mdp'=>Hash::make('123456') ,'nom' =>'vava', 'prenom' => 'vava','tel'=>'0651312418','mail'=>'vava@gmail.com','adresse'=>'1 rue de la poire' ,'cp'=>'88888' ,'estAdmin' => false ,'Liste-attente'=>'0',
            ),
            array(
                'idUtilisateur' => 10,'mdp'=>Hash::make('123456') ,'nom' =>'vivi', 'prenom' => 'vivi','tel'=>'0654151231','mail'=>'vivi@gmail.com','adresse'=>'56 rue de la mirabelle' ,'cp'=>'99999' ,'estAdmin' => false ,'Liste-attente'=>'0',
            ),
        ));
        reservation::insert(array(
            array(
                'idReservation' => 1, 'numUtilisateur' => 1 , 'date_debut' => null, 'date_fin' => null, 'num_place'=>1,
            ),
            array(
                'idReservation' => 2, 'numUtilisateur' => 2 , 'date_debut' => null, 'date_fin' => null , 'num_place'=>2,
            ),
            array(
                'idReservation' => 3, 'numUtilisateur' => 3 , 'date_debut' => null, 'date_fin' => null , 'num_place'=>3,
            ),
            array(
                'idReservation' => 4, 'numUtilisateur' => 4 , 'date_debut' => null, 'date_fin' => null ,'num_place'=>4,
            ),
            array(
                'idReservation' => 5, 'numUtilisateur' => 5 , 'date_debut' => null, 'date_fin' => null ,'num_place'=>5,
            ),
            array(
                'idReservation' => 6, 'numUtilisateur' => 6 , 'date_debut' => null, 'date_fin' => null ,'num_place'=>6,
            ),
            array(
                'idReservation' => 7, 'numUtilisateur' => 7 , 'date_debut' => null, 'date_fin' => null ,'num_place'=>7,
            ),
            array(
                'idReservation' => 8, 'numUtilisateur' => 8 , 'date_debut' => null, 'date_fin' => null ,'num_place'=>8,
            ),
            array(
                'idReservation' => 9, 'numUtilisateur' => 9 , 'date_debut' => null, 'date_fin' => null ,'num_place'=>9,
            ),
            array(
                'idReservation' => 10, 'numUtilisateur' => 10 , 'date_debut' => null, 'date_fin' => null ,'num_place'=>10,
            ),
        ));
    }
}
