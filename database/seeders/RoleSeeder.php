<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'User']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Supply Officer']);
        Role::create(['name' => 'Section Head']);
        Role::create(['name' => 'Regional Director']);
        Role::create(['name' => 'Asst. Regional Director']);
        Role::create(['name' => 'Supply and Property Officer']);
        Role::create(['name' => 'BAC Chairperson']);
        Role::create(['name' => 'Budget Officer']);
        Role::create(['name' => 'Vice Chairperson']);
        Role::create(['name' => 'BAC Member']);
    }
}
