<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


use App\Enums\RolesEnum;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // In the last line we are assigning the User role to this factory
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com'
        ])->assignRole(RolesEnum::User->value);

        // for admin
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com'
        ])->assignRole(RolesEnum::Admin->value);


        // for vendor
        User::factory()->create([
            'name' => 'Vendor',
            'email' => 'vendor@example.com'
        ])->assignRole(RolesEnum::Vendor->value);
    }
}
