<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo', function (Blueprint $table) {
            $table->char('codigoGrupo')->primary()->index();
            $table->char('codigoMateria','6');
            $table->tinyInteger('cupo');
            $table->char('codigoEmpleado');
            $table->char('tipo');
            $table->foreign('codigoMateria')->references('codigoMateria')->on('materia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo');
    }
}
