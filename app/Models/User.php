<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $role
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultum[] $consultas
 * @property ContenidoEdu[] $contenidoEdus
 * @property Servicio[] $servicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'email', 'password', 'role'];

    protected $hidden = ['password', 'remember_token'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultas()
    {
        return $this->hasMany(\App\Models\Consultum::class, 'id', 'user_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contenidoEdus()
    {
        return $this->hasMany(\App\Models\ContenidoEdu::class, 'id', 'user_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany(\App\Models\Servicio::class, 'id', 'user_id');
    }
    
}
