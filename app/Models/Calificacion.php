<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Calificacion
 *
 * @property $IdCalificacion
 * @property $IdServicio
 * @property $Puntuacion
 * @property $Comentario
 * @property $created_at
 * @property $updated_at
 *
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Calificacion extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['IdCalificacion', 'IdServicio', 'Puntuacion', 'Comentario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function servicio()
    {
        return $this->belongsTo(\App\Models\Servicio::class, 'IdServicio', 'IdServicio');
    }
    
}
