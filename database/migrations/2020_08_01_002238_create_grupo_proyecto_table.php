<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupoProyecto', function (Blueprint $table) {
            $table->char('codigoGrupoProyecto')->index();
            $table->char('codigoMateria','6')->index();
            $table->char('codigoEstudiante','8');
            $table->char('codigoGrupo');
            $table->char('ultimoModificador','8');
            $table->tinyInteger('tipoGrupoProyecto');
            $table->primary(['codigoGrupoProyecto','codigoMateria']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupoProyecto');
    }
}
