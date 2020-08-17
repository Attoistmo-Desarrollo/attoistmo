<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cronogramaactividade extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cronogramaactividades';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['actividad', 'asignado', 'cantidad', 'tiempofase', 'estado', 'fechaentrega'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
