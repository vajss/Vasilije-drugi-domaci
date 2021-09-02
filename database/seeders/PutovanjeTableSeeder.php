<?php

namespace Database\Seeders;

use App\Models\Putovanje;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PutovanjeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Putovanje::insert([
                'cena' => 100 * rand(50, 200),
                'domacinLG' => "LG Beograd",
                'hotel' => "Hotel" . " " . Str::random(rand(5, 10)),
                'datum_pocetka' => Carbon::today(),
                'dogadjaj_id' => rand(1,6)
            ]);
            Putovanje::insert([
                'cena' => 100 * rand(50, 200),
                'domacinLG' => "LG Moskva",
                'hotel' => "Hotel" . " " . Str::random(rand(5, 10)),
                'datum_pocetka' => Carbon::today(),
                'dogadjaj_id' => rand(1,6)
            ]);
            Putovanje::insert([
                'cena' => 100 * rand(50, 200),
                'domacinLG' => "LG Budimpesta",
                'hotel' => "Hotel" . " " . Str::random(rand(5, 10)),
                'datum_pocetka' => Carbon::today(),
                'dogadjaj_id' => rand(1,6)
            ]);
            Putovanje::insert([
                'cena' => 100 * rand(50, 200),
                'domacinLG' => "LG Novi Sad",
                'hotel' => "Hotel" . " " . Str::random(rand(5, 10)),
                'datum_pocetka' => Carbon::today(),
                'dogadjaj_id' => rand(1,6)
            ]);
            Putovanje::insert([
                'cena' => 100 * rand(50, 200),
                'domacinLG' => "LG Tampere",
                'hotel' => "Hotel" . " " . Str::random(rand(5, 10)),
                'datum_pocetka' => Carbon::today(),
                'dogadjaj_id' => rand(1,6)
            ]);
            Putovanje::insert([
                'cena' => 100 * rand(50, 200),
                'domacinLG' => "LG Sofia",
                'hotel' => "Hotel" . " " . Str::random(rand(5, 10)),
                'datum_pocetka' => Carbon::today(),
                'dogadjaj_id' => rand(1,6)
            ]);
            Putovanje::insert([
                'cena' => 100 * rand(50, 200),
                'domacinLG' => "LG Berlin",
                'hotel' => "Hotel" . " " . Str::random(rand(5, 10)),
                'datum_pocetka' => Carbon::today(),
                'dogadjaj_id' => rand(1,6)
            ]);
            Putovanje::insert([
                'cena' => 100 * rand(50, 200),
                'domacinLG' => "LG Ankara",
                'hotel' => "Hotel" . " " . Str::random(rand(5, 10)),
                'datum_pocetka' => Carbon::today(),
                'dogadjaj_id' => rand(1,6)
            ]);
            Putovanje::insert([
                'cena' => 100 * rand(50, 200),
                'domacinLG' => "LG Yellowstone",
                'hotel' => "Hotel" . " " . Str::random(rand(5, 10)),
                'datum_pocetka' => Carbon::today(),
                'dogadjaj_id' => rand(1,6)
            ]);
            Putovanje::insert([
                'cena' => 100 * rand(50, 200),
                'domacinLG' => "LG Zagreb",
                'hotel' => "Hotel" . " " . Str::random(rand(5, 10)),
                'datum_pocetka' => Carbon::today(),
                'dogadjaj_id' => rand(1,6)
            ]);
            Putovanje::insert([
                'cena' => 100 * rand(50, 200),
                'domacinLG' => "LG Saint Petersburg",
                'hotel' => "Hotel" . " " . Str::random(rand(5, 10)),
                'datum_pocetka' => Carbon::today(),
                'dogadjaj_id' => rand(1,6)
            ]);
            
        
    }
}
