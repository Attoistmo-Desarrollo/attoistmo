<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadors', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nombre',30)->nullable();
            $table->string('area',30)->nullable();
            $table->unsignedBigInteger('id_estimador');
            $table->foreign('id_estimador')->references('id')->on('estimadorinsumos');
            $table->timestamps();
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
        Schema::dropIfExists('trabajadores');
    }
}
