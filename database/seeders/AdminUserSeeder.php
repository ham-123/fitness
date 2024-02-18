<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
        public function run()
        {
            User::create([
                'nom' => 'Admin',
                'prenom'=>'Admin',
                'tel'=>'00000000',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'is_admin' => true,
            ]);
        }
        
}

