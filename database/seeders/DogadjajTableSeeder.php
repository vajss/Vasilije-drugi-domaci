<?php

namespace Database\Seeders;

use App\Models\Dogadjaj;
use Illuminate\Database\Seeder;

class DogadjajTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dogadjaj::insert([
            'tip' => 'Edukativni',
            'naziv' => 'Vision',
            'broj_mesta' => 20
        ]);
        Dogadjaj::insert([
            'tip' => 'Karijerni',
            'naziv' => 'Business booster',
            'broj_mesta' => 15
        ]);
        Dogadjaj::insert([
            'tip' => 'Edukativni',
            'naziv' => 'Brain trainer',
            'broj_mesta' => 25
        ]);
        Dogadjaj::insert([
            'tip' => 'Karijerni',
            'naziv' => 'Lean Six Sigam',
            'broj_mesta' => 15
        ]);
        Dogadjaj::insert([
            'tip' => 'Zabavni',
            'naziv' => 'Activity Week',
            'broj_mesta' => 20
        ]);
        Dogadjaj::insert([
            'tip' => 'Edukativni',
            'naziv' => 'Europe 3D',
            'broj_mesta' => 20
        ]);
    }
}
