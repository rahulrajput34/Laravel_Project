<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Electronics
            [
                'name' => 'Mobile Phones',
                'department_id' => 1,
                'parent_id' => 1, // Parent is Electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartphones',
                'department_id' => 1,
                'parent_id' => 1, // Parent is Electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Electronics Accessories',
                'department_id' => 1,
                'parent_id' => 1, // Parent is Electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Clothing
            [
                'name' => 'Men\'s T-Shirts',
                'department_id' => 2,
                'parent_id' => 2, // Parent is Clothing
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Men\'s Clothing',
                'department_id' => 2,
                'parent_id' => 2, // Parent is Clothing
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Clothing Accessories',
                'department_id' => 2,
                'parent_id' => 2, // Parent is Clothing
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Home & Garden
            [
                'name' => 'Living Room Furniture',
                'department_id' => 3,
                'parent_id' => 3, // Parent is Home & Garden
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Furniture',
                'department_id' => 3,
                'parent_id' => 3, // Parent is Home & Garden
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Home Decor',
                'department_id' => 3,
                'parent_id' => 3, // Parent is Home & Garden
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Sports & Outdoors
            [
                'name' => 'Camping Gear',
                'department_id' => 4,
                'parent_id' => 4, // Parent is Sports & Outdoors
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Outdoor Gear',
                'department_id' => 4,
                'parent_id' => 4, // Parent is Sports & Outdoors
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fitness Equipment',
                'department_id' => 4,
                'parent_id' => 4, // Parent is Sports & Outdoors
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Books & Media
            [
                'name' => 'E-Books',
                'department_id' => 5,
                'parent_id' => 5, // Parent is Books & Media
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Digital Media',
                'department_id' => 5,
                'parent_id' => 5, // Parent is Books & Media
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Magazines',
                'department_id' => 5,
                'parent_id' => 5, // Parent is Books & Media
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
