<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni', 25);
            $table->string('nombre', 25);
            $table->string('apellido', 25);
            $table->string('año', 10);
            $table->string('fecha_nacimiento', 15);
            $table->string('inasistencias1', 5);
            $table->string('inasistencias2', 5);
            $table->string('previas', 5);
            $table->string('ciclo', 15);
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
       Schema::dropIfExists('estudiantes');
    }
}
