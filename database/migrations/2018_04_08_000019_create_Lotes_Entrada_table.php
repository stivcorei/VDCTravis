<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotesEntradaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Lotes_Entrada';

    /**
     * Run the migrations.
     * @table Lotes_Entrada
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('fecha_ingreso');
            $table->integer('cantidad_kilos');
            $table->integer('kilos_disponibles');
            $table->integer('cliente_idCliente');
            $table->integer('caficultor_idCaficultor');
            $table->integer('id_Finca');
            $table->integer('id_Perfil_Taza');
            $table->integer('id_Factor_Rendimiento');

            $table->index(["id_Finca"], 'fk_Lote_Entrada_Finca1_idx');

            $table->index(["id_Perfil_Taza"], 'fk_Lote_Entrada_Perfil_Taza1_idx');

            $table->index(["id_Factor_Rendimiento"], 'fk_Lote_Entrada_Factor_Rendimiento1_idx');


            $table->foreign('id_Finca', 'fk_Lote_Entrada_Finca1_idx')
                ->references('id')->on('Fincas')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_Perfil_Taza', 'fk_Lote_Entrada_Perfil_Taza1_idx')
                ->references('id')->on('Perfiles_Taza')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_Factor_Rendimiento', 'fk_Lote_Entrada_Factor_Rendimiento1_idx')
                ->references('id')->on('Factores_Rendimiento')
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
