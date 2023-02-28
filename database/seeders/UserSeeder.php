<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => null,
                'password' => '$2y$10$1EUkQPnR9y9rfDeATFBYTewdAkiPJy.jle0BhMol4Z.aCIRnxf54i',
                'remember_token' => null,
            ],
        ]);
    }
}
