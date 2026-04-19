<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Career::create(['nombre' => 'Ingeniería en Sistemas']);
    \App\Models\Career::create(['nombre' => 'Ingeniería Industrial']);
    \App\Models\Career::create(['nombre' => 'Licenciatura en Administración']);
}
}
