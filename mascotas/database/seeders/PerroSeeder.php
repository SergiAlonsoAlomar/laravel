<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Perro;


class PerroSeeder extends Seeder
{
    public function run()
    {
        Perro::create([
            'nick' => 'tobby',
            'password' => Hash::make('tobby'),
            'nombre' => 'Tobby',
            'raza' => 'Boxer',
            'sexo' => 'macho',
            'edad' => 3,
            'color' => 'Marrón',
            'nombreHumano' => 'Juan',
            'telefono' => '123456789',
            'foto' => 'storage/tobby.jpg'
        ]);
        Perro::create([
            'nick' => 'rex',
            'password' => Hash::make('rex'),
            'nombre' => 'Rex',
            'raza' => 'Buldog',
            'sexo' => 'macho',
            'edad' => 6,
            'color' => 'Blanco',
            'nombreHumano' => 'Carlos',
            'telefono' => '130462899',
            'foto' => 'storage/rex.jpg'
        ]);
        Perro::create([
            'nick' => 'luna',
            'password' => Hash::make('luna'),
            'nombre' => 'Luna',
            'raza' => 'Boxer',
            'sexo' => 'hembra',
            'edad' => 4,
            'color' => 'Blanco',
            'nombreHumano' => 'Jose',
            'telefono' => '843023784',
            'foto' => 'storage/luna.jpg'
        ]);
        Perro::create([
            'nick' => 'selma',
            'password' => Hash::make('selma'),
            'nombre' => 'Selma',
            'raza' => 'Caniche',
            'sexo' => 'hembra',
            'edad' => 3,
            'color' => 'Blanco',
            'nombreHumano' => 'Clara',
            'telefono' => '943628349',
            'foto' => 'storage/selma.jpg'
        ]);
        Perro::create([
            'nick' => 'perla',
            'password' => Hash::make('perla'),
            'nombre' => 'Perla',
            'raza' => 'Labrador',
            'sexo' => 'hembra',
            'edad' => 3,
            'color' => 'Negro',
            'nombreHumano' => 'Patty',
            'telefono' => '453627348',
            'foto' => 'storage/perla.jpg'
        ]);
    }
}