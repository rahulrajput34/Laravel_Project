<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Enums\RolesEnum;
use App\Enums\PermissionsEnum;




class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles
        $userRole = Role::create([
            'name' => RolesEnum::User->value,
        ]);

        $vendorRole = Role::create([
            'name' => RolesEnum::Vendor->value,
        ]);

        $adminRole = Role::create([
            'name' => RolesEnum::Admin->value,
        ]);


        // Permissions
        $approveVendors = Permission::create([
            'name' => PermissionsEnum::ApproveVendors->value,
        ]);

        $sellProducts = Permission::create([
            'name' => PermissionsEnum::SellProducts->value,
        ]);

        $buyProducts = Permission::create([
            'name' => PermissionsEnum::BuyProducts->value,
        ]);


        // Synchronize Roles and Permissions

        // permissions for user role
        $userRole->syncPermissions([
            $buyProducts
        ]);

        // permissions for vendor role
        $vendorRole->syncPermissions([
            $sellProducts,
            $buyProducts
        ]);

        // permissions for admin role
        $adminRole->syncPermissions([   
            $approveVendors,
            $sellProducts,
            $buyProducts
        ]);
    }
}
