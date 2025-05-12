<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Modou Ndiaye',
            'email' => 'modou@gmail.com',
            'password' => Hash::make('password'),
        ]);
    
        User::create([
            'name' => 'Bob Marley',
            'email' => 'bob@example.com',
            'password' => Hash::make('password'),
        ]);
    
        User::create([
            'name' => 'Cheikh Mbaye',
            'email' => 'cheikh@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
