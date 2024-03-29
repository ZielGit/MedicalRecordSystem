<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Frans',
            'email' => 'frans@gmail.com',
            'password' => bcrypt('SistemaClinica'),
            'birthdate' => '1994-05-09'
        ])->assignRole('Médico');
    }
}
