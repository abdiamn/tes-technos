<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Data extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['data' => '12'],
            ['data' => '4'],
            ['data' => '8'],
        ];

        foreach ($data as $data) {
            \App\Models\data::create($data);
        }
    }
}
