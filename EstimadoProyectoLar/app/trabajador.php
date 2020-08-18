<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class trabajador extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'trabajadors';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'nombre', 'area'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
