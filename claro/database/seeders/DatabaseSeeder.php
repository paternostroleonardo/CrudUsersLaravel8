<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\Department;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * llamado de las clases de las semillas de datos creados
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(DeparmentSeeder::class);
        $this->call(CitySeeder::class);
    }
}
