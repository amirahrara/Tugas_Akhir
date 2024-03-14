<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Kategori::create([
            'kategori' => 'kemeja'
        ]);

        Kategori::create([
            'kategori' => 'outer'
        ]);

        Kategori::create([
            'kategori' => 'dress'
        ]);

        Kategori::create([
            'kategori' => 'tunik'
        ]);

        Kategori::create([
            'kategori' => 'blouse'
        ]);

        Kategori::create([
            'kategori' => 'celana'
        ]);

        Kategori::create([
            'kategori' => 'rok'
        ]);

    }
}
