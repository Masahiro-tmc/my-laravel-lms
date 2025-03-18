<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        if (!Role::where('name', 'admin')->exists()) {
            Role::create(['name' => 'admin']);
        }
        if (!Role::where('name', 'instructor')->exists()) {
            Role::create(['name' => 'instructor']);
        }
        if (!Role::where('name', 'student')->exists()) {
            Role::create(['name' => 'student']);
        }
        if (!Role::where('name', 'organisation')->exists()) {
            Role::create(['name' => 'organisation']);
        }
    }
}
