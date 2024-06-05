<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Perro extends Authenticatable{
    use HasFactory;

    protected $fillable = [
        'nick',
        'password',
        'nombre',
        'raza',
        'sexo',
        'edad',
        'color',
        'nombreHumano',
        'telefono',
        'foto'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}