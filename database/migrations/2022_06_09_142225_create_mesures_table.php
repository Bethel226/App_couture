<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesures', function (Blueprint $table) {
            $table->id();
            $table->float('epaule')->nullable();
            $table->float('manche')->nullable();
            $table->float('hauteur_taille')->nullable();
            $table->float('cuisse')->nullable();
            $table->float('tour_poitrine')->nullable();
            $table->float('hanche')->nullable();
            $table->float('hauteur_poitrine')->nullable();
            $table->float('tour_bras')->nullable();
            $table->float('tour_poignet')->nullable();
            $table->float('longueur_bras')->nullable();
            $table->float('tour_taille')->nullable();
            $table->float('interieur_jambe')->nullable();
            $table->unsignedBigInteger('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('mesures');
    }
}
