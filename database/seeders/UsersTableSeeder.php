<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Création de l'utilisateur admin
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin_password'), // Remplacez 'admin_password' par votre propre mot de passe
            'remember_token' => Str::random(10),
        ]);

        // Création d'un utilisateur standard
        DB::table('users')->insert([
            'name' => 'Standard User',
            'email' => 'user@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('user_password'), // Remplacez 'user_password' par votre propre mot de passe
            'remember_token' => Str::random(10),
        ]);
    }
}
