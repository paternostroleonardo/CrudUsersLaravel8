<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * Creación de sedders de usuario por default
     */
    public function run()
    {
        DB::table('users')->delete();
        $user1 = User::create([
            'name' => 'claroinsurance',
            'email' => 'admin@claroinsurance.com',
            'email_verified_at' => '2021-14-07 12:09:50',
            'password' => 'admin',
            'identification' => '124364837',
            'phone' => '3007335',
            'birth_date' => '1993-12-02',
        ]);
    }
}

