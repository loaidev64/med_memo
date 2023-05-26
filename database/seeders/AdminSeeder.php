<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'role_id' => 1,
        ])->create();
    }
}
