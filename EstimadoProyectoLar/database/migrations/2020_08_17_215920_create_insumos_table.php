<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('insumos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nombre')->nullable();
                $table->string('tipo')->nullable();
                $table->string('descripcion')->nullable();
                $table->integer('id_estimador')-> unsigned();
                $table->foreign('id_estimador')->references('id')->on('estimadorinsumos');
                $table->timestamps();
                $table->softDeletes();
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('insumos', function (Blueprint $table) {
            $table->dropForeign(['id_estimador']);
            $table->dropColumn('id_estimador');
        });
        Schema::drop('insumos');
    }

}
