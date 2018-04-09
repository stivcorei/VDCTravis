<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFincasHasVariedadesCafeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Fincas_has_Variedades_Cafe';

    /**
     * Run the migrations.
     * @table Fincas_has_Variedades_Cafe
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_Finca');
            $table->integer('id_Variedad_Cafe');

            $table->index(["id_Variedad_Cafe"], 'fk_Finca_has_Variedad_Cafe_Variedad_Cafe1_idx');

            $table->index(["id_Finca"], 'fk_Finca_has_Variedad_Cafe_Finca1_idx');


            $table->foreign('id_Finca', 'fk_Finca_has_Variedad_Cafe_Finca1_idx')
                ->references('id')->on('Fincas')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_Variedad_Cafe', 'fk_Finca_has_Variedad_Cafe_Variedad_Cafe1_idx')
                ->references('id')->on('Variedades_Cafe')
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
