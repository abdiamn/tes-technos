<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Kategori extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category' => 'A'],
            ['category' => 'B'],
            ['category' => 'C'],
        ];
        
        foreach ($categories as $category) {
            \App\Models\kategori::create($category);
        }

    }
}
