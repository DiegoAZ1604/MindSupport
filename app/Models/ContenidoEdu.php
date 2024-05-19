<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContenidoEdu
 *
 * @property $IdContenido
 * @property $user_id
 * @property $Titulo
 * @property $Descripcion
 * @property $TipoContenido
 * @property $Contenido
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property Servicio[] $servicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ContenidoEdu extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['IdContenido', 'user_id', 'Titulo', 'Descripcion', 'TipoContenido', 'Contenido'];


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
        return $this->hasMany(\App\Models\Servicio::class, 'IdContenido', 'IdContenido');
    }
    
}
