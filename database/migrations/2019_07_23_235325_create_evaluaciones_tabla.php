<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionesTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->double('puntaje');
            $table->integer('idDocente')->unsigned();
            $table->foreign('idDocente')->references('id')->on('docentes');
            $table->integer('idCriterio')->unsigned();
            $table->foreign('idCriterio')->references('id')->on('criterios');
            $table->integer('idFrecuencia')->unsigned();
            $table->foreign('idFrecuencia')->references('id')->on('frecuencias');            
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
        Schema::dropIfExists('evaluaciones');
    }
}
