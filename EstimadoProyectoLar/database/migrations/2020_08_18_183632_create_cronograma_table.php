<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCronogramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('cronograma', function(Blueprint $table) {
                $table->increments('id');
                $table->text('actividad');
$table->string('asignado');
$table->integer('cantidad');
$table->time('tiempoestimado');
$table->time('tiemporeal');
$table->string('estado');
$table->date('fechaentrega');

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
        Schema::drop('cronograma');
    }

}
