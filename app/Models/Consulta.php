<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consulta
 *
 * @property $IdConsulta
 * @property $user_id
 * @property $FechaHora
 * @property $Descripcion
 * @property $Costo
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property Servicio[] $servicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consulta extends Model
{
    protected $table = 'Consulta';

    protected $primaryKey = 'IdConsulta';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'FechaHora', 'Descripcion', 'Costo'];


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
    public function servicios()
    {
        return $this->hasMany(\App\Models\Servicio::class, 'IdConsulta', 'IdConsulta');
    }
    
}
