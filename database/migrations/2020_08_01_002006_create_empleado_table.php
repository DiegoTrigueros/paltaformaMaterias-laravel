<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->char('codigoUsuario','8')->primary()->index();
            $table->string('password');
            $table->string('nombresUsuario');
            $table->string('apellidosUsuario');
            $table->char('telefonoUsuario','9');
            $table->tinyInteger('edadUsuario');
            $table->string('imagenPerfil');
            $table->string('cargo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
