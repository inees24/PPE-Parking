<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Utilisateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->id();
            $table->string('mdp');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('tel');
            $table->string('mail');
            $table->string('adresse');
            $table->integer('cp');
            $table->boolean('estAdmin');
            $table->integer('liste_attente');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('utilisateur');
    }
}
