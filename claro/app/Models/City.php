<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $guarded = [ ];

    /**
     * relación de una ciudad tiene un departamento
     */
    public function department(){
        return $this->hasOne(Department::all);
    }
}
