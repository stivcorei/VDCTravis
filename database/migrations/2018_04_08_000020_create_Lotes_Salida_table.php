<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotesSalidaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Lotes_Salida';

    /**
     * Run the migrations.
     * @table Lotes_Salida
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('cantidad_kilos');
            $table->integer('id_Lote_Entrada');
            $table->integer('id_Linea_Cafe');

            $table->index(["id_Linea_Cafe"], 'fk_Lote_Salida_Linea_Cafe1_idx');


            $table->foreign('id_Linea_Cafe', 'fk_Lote_Salida_Linea_Cafe1_idx')
                ->references('id')->on('Lineas_Cafe')
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
