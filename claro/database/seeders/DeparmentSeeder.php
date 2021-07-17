<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Department;

class DeparmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * creación de sedders de departamentos por default
     */
    public function run()
    {
        DB::table('departments')->delete();
        $dpto1 = Department::create([
            'namedpto' => 'Atlantico',
        ]);
        $dpto2 = Department::create([
            'namedpto' => 'Cundinamarca',
        ]);
        $dpto3 = Department::create([
            'namedpto' => 'Antioquia',
        ]);
    }
}
