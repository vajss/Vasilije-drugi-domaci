<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Putovanje;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $ime_prezime = $request->input('ime_prezime');
        $broj_sobe = $request->input('broj_sobe');
        $prijava_datum = Carbon::now();
        $putovanje_id = $request->input('putovanje_id');

        if ($putovanje_id) {
            $putovanje = Putovanje::find($putovanje_id);
            $studenti = $putovanje->studenti;

            foreach ($studenti as $student) {
                if ($student->broj_sobe == $broj_sobe)
                    return response()->json([
                        'message' => "Soba zauzeta, izaberite neku drugu!"
                    ]);
            }
            if ($putovanje->povecaj_popunjena()) {
                Student::insert([
                    'ime_prezime' => $ime_prezime,
                    'prijava_datum' => $prijava_datum,
                    'broj_sobe' => $broj_sobe,
                    'putovanje_id' => $putovanje_id
                ]);
                return response()->json([
                    'message' => "Uspesna prijava!"
                ]);
            } else return response()->json([
                'message' => "Popunjena su sva mesta!"
            ]);
        }
    }
}
