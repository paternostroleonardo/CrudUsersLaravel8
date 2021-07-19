<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [ ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * metodo para guardar la password encriptada mediante el modelo
     */
    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }
    /**
     * Relacion de un usuario tiene un departamento
     */
    public function dpto() {
        return $this->hasOne(Department::class);
    }
    /**
     * relación de un usuario tiene una ciudad a través del departamento
     */
    public function city() {
        return $this->hasOneThrough(City::class);
    }
    /**
     * Calculando y retornando la edad de cada users a partir de la fecha de nacimiento con carbon
     */
    public function getAgeAttribute(){
        return Carbon::parse($this->attributes["birth_date"])->age;
    }
     /**
     * query scope para filtrado
     */
    public function scopeName($query, $name){
        if($name)
        return $query->where('name', 'LIKE', "%$name%");
    }
    public function scopeEmail($query, $email){
        if($email)
        return $query->where('email', 'LIKE', "%$email%");
    }
    public function scopeIdentification($query, $identification){
        if($identification)
        return $query->where('identification', 'LIKE', "%$identification%");
    }

}
