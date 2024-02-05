<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Support\Str;
use App\Models\ClassMahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Muhamad Luthfi Sadli',
            'no_telp' => '089697491160',
            'email' => 'super-admin@email.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$RAQcmgnIQYm.Z4L7HaDQLuOqdicPedmmIVI/bfgDnh9kRj/bGhF4e', // admin123
            'remember_token' => Str::random(10),
        ]);
        User::factory(3)->create();
        ClassMahasiswa::factory(6)->create();
        Mahasiswa::factory(10)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
