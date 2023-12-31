<?php

namespace Database\Seeders\Autorizations;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
   
        Role::create([
            'name' => 'admin',
        ]);

        Role::create([
            'name' => 'service social',
        ]);

        Role::create([
            'name' => 'medecin générale',
        ]);

        Role::create([
            'name' => 'root',
        ]);
        
    }
}
