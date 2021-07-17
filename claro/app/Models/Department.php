<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded = [ ];

     /**
     * relación de un departamento tiene muchas ciudades
     */
    public function city(){
        return $this->hasMany(City::all);
    }
}
