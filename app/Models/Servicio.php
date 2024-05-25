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
 * @property Consulta $consulta
 * @property ContenidoEdu $contenidoEdu
 * @property User $user
 * @property Calificacion[] $calificacions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    protected $table = 'Servicio';

    protected $primaryKey = 'IdServicio';

    public $incrementing = true;

    protected $keyType = 'int';
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'IdContenido', 'IdConsulta', 'Costo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consulta()
    {
        return $this->belongsTo(\App\Models\Consulta::class, 'IdConsulta', 'IdConsulta');
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
