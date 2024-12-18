<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menuadmin extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'email',
        'dia',
        'cantidad_personas',
    ];
}
