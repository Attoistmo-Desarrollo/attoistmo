<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class insumo extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'insumos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'nombre', 'tipo', 'descripcion'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
