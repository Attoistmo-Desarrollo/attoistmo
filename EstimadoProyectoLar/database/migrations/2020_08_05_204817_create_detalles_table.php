<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('detalles', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('n');
$table->string('nombretarea');
$table->string('nombreproyecto');
$table->integer('cantidad');
$table->string('estado');
$table->text('comentarios');
$table->string('archivo');
$table->string('url');

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
        Schema::drop('detalles');
    }

}
