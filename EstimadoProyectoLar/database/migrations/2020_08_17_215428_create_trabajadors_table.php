<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrabajadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('trabajadors', function(Blueprint $table) {
                $table->integer('id');
                $table->string('nombre');
                $table->string('area');
                $table->integer('id_estimador')-> unsigned();
                $table->timestamps();
                $table->softDeletes();
                $table->foreign('id_estimador')->references('id')->on('estimadorinsumos');
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trabajadors', function (Blueprint $table) {
            $table->dropForeign(['id_estimador']);
            $table->dropColumn('id_estimador');
        });
        Schema::drop('trabajadors');
    }

}
