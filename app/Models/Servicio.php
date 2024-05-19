<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $IdServicio
 * @property $user_id
 * @property $IdContenido
 * @property $IdConsulta
 * @property $Costo
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultum $consultum
 * @property ContenidoEdu $contenidoEdu
 * @property User $user
 * @property Calificacion[] $calificacions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['IdServicio', 'user_id', 'IdContenido', 'IdConsulta', 'Costo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consultum()
    {
        return $this->belongsTo(\App\Models\Consultum::class, 'IdConsulta', 'IdConsulta');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contenidoEdu()
    {
        return $this->belongsTo(\App\Models\ContenidoEdu::class, 'IdContenido', 'IdContenido');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calificacions()
    {
        return $this->hasMany(\App\Models\Calificacion::class, 'IdServicio', 'IdServicio');
    }
    
}
