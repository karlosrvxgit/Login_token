<?php

namespace Database\Seeders;

use App\Http\Controllers\User;
use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Users::factory(5)->create();
    }
}
