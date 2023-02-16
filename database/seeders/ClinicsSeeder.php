<?php

namespace Database\Seeders;

use App\Models\Clinic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClinicsSeeder extends Seeder
{

    public function run()
    {
        Clinic::factory()->count(2)->create();
    }
}
