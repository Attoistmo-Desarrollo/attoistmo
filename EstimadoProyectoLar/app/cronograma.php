<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cronograma extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cronogramas';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['actividad', 'asignado', 'cantidad', 'tiempoestimado', 'tiemporeal', 'estado', 'fechaentrega'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
