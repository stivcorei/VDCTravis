<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoPersonaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Tipo_Persona';

    /**
     * Run the migrations.
     * @table Tipo_Persona
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('cedula_Persona');
            $table->integer('id_Tipo_Usuario');

            $table->index(["cedula_Persona"], 'fk_Tipo_Persona_Persona1_idx');

            $table->index(["id_Tipo_Usuario"], 'fk_Tipo_Persona_Tipo_Usuario1_idx');


            $table->foreign('id_Tipo_Usuario', 'fk_Tipo_Persona_Tipo_Usuario1_idx')
                ->references('id')->on('Tipo_Usuario')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('cedula_Persona', 'fk_Tipo_Persona_Persona1_idx')
                ->references('cedula')->on('Persona')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
