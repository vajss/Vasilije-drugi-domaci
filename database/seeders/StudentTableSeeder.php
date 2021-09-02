<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Putovanje;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++) {
            $putovanje = Putovanje::find(rand(1, 11));
            if ($putovanje->povecaj_popunjena());
            Student::insert([
                'ime_prezime' => Str::random(rand(5, 7)) . " " . Str::random(rand(5, 6)),
                'broj_sobe' => rand(1, $putovanje->dogadjaj->broj_mesta),
                'prijava_datum' => Carbon::today(),
                'putovanje_id' => $putovanje->id
            ]);
        }
    }
}
