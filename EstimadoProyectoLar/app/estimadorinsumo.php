<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class estimadorinsumo extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estimadorinsumos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'Fecha', 'nombre'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
