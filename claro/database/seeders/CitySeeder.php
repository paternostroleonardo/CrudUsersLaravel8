<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * creación de sedders de ciudades por default
     */
    public function run()
    {
        DB::table('cities')->delete();
        $city1 = City::create([
            'namecity' => 'Barranquilla',
            'departmentcity_id' => '1'
        ]);
        $city2 = City::create([
            'namecity' => 'Soledad',
            'departmentcity_id' => '1'
        ]);
        $city3 = City::create([
            'namecity' => 'Puerto colombia',
            'departmentcity_id' => '1'
        ]);
        $city4 = City::create([
            'namecity' => 'Bogota',
            'departmentcity_id' => '2'
        ]);
        $city5 = City::create([
            'namecity' => 'Madrid',
            'departmentcity_id' => '2'
        ]);
        $city6 = City::create([
            'namecity' => 'Mosquera',
            'departmentcity_id' => '2'
        ]);
        $city7 = City::create([
            'namecity' => 'Medellin',
            'departmentcity_id' => '3'
        ]);
        $city8 = City::create([
            'namecity' => 'Envigado',
            'departmentcity_id' => '3'
        ]);
        $city9 = City::create([
            'namecity' => 'Rio negro',
            'departmentcity_id' => '3'
        ]);
    }
}
