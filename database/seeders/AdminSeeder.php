<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'edouard@admin.com',
            'name' => 'admin',
            'password' => Hash::make('admin'),
            'role' => USER::ADMIN_ROLE
        ]);
    }
}
