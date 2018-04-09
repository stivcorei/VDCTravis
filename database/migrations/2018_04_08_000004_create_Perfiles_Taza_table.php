<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilesTazaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Perfiles_Taza';

    /**
     * Run the migrations.
     * @table Perfiles_Taza
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->double('puntaje_taza');
            $table->string('aroma', 45);
            $table->string('sabor', 45);
            $table->string('acidez', 45);
            $table->string('cuerpo', 45);
            $table->string('dulzor', 45);
            $table->integer('peso_total_entrada');
            $table->integer('valor_balance');
            $table->string('descripcion_balance', 45)->nullable();
            $table->integer('estimado_salida');
            $table->string('secado', 45);
            $table->string('fragancia', 45);
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
