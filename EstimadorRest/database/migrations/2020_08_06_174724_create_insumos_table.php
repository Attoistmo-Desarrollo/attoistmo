<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30)->nullable();
            $table->string('tipo',30)->nullable();
            $table->string('descripcion',40)->nullable();
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
        Schema::table('insumos', function (Blueprint $table) {
            $table->dropForeign(['id_estimador']);
            $table->dropColumn('id_estimador');
        });
        Schema::dropIfExists('insumos');
    }
}
