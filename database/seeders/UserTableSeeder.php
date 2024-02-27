<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => bcrypt('#*+pass'),
            'remember_token' => Str::random(60),
        ]);
    }
}
