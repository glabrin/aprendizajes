<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('usuarios')){
            Schema::create('usuarios', function (Blueprint $table) {
                $table->string('nombreUsuario', 15)->primary();
                $table->string('nombre', 30);
                $table->string('apellido', 30);
                $table->string('telefono', 20);
                $table->string('email', 40);
                $table->string('genero', 15);
                $table->string('nacimiento', 15);
                $table->string('pass', 10);
                $table->string('rol', 20);
                $table->string('avatar', 400);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
