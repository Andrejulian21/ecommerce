<?php

namespace Database\Seeders;

use App\Models\brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class brandseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        brand::factory(20)->create();
    }
}
