<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Assurez-vous que les ID de rôle correspondent à ceux de votre table des rôles
        $adminRoleId = 1; // ID pour le rôle Admin
        $userRoleId = 2;  // ID pour le rôle User

        // Associer l'Admin
        DB::table('role_user')->insert([
            'role_id' => $adminRoleId,
            'user_id' => 1 // Assurez-vous que cet ID correspond à l'utilisateur Admin dans votre table des utilisateurs
        ]);

        // Associer l'utilisateur standard
        DB::table('role_user')->insert([
            'role_id' => $userRoleId,
            'user_id' => 2 // Assurez-vous que cet ID correspond à l'utilisateur standard dans votre table des utilisateurs
        ]);
    }
}
