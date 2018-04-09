<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Personas';

    /**
     * Run the migrations.
     * @table Personas
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('cedula');
            $table->string('nombres', 45);
            $table->string('apellidos', 45);
            $table->string('telefono', 45);
            $table->string('direccion', 45);
            $table->string('email');
            $table->integer('id_Rol_empleado');
            $table->integer('id_Tipo_Documento');

            $table->index(["id_Tipo_Documento"], 'fk_Persona_Tipo_Documento1_idx');

            $table->index(["id_Rol_empleado"], 'fk_Persona_Rol_empleado1_idx');


            $table->foreign('id_Rol_empleado', 'fk_Persona_Rol_empleado1_idx')
                ->references('id')->on('Roles_Empleado')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_Tipo_Documento', 'fk_Persona_Tipo_Documento1_idx')
                ->references('id')->on('Tipos_Documento')
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
