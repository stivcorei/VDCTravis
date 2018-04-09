<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFincasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Fincas';

    /**
     * Run the migrations.
     * @table Fincas
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('direccion', 45);
            $table->string('altitud', 45);
            $table->string('vereda', 45)->nullable();
            $table->integer('cedula_Persona');
            $table->integer('id_Municipio');

            $table->index(["id_Municipio"], 'fk_Finca_Municipio1_idx');

            $table->index(["cedula_Persona"], 'fk_finca_Persona1_idx');


            $table->foreign('cedula_Persona', 'fk_finca_Persona1_idx')
                ->references('cedula')->on('Personas')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_Municipio', 'fk_Finca_Municipio1_idx')
                ->references('id')->on('Municipios')
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
