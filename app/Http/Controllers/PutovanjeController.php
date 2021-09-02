<?php

namespace App\Http\Controllers;

use App\Models\Putovanje;
use Illuminate\Http\Request;

class PutovanjeController extends Controller
{
    public function get()
    {

        $putovanja = Putovanje::with('dogadjaj')->get();

        return response()->json([
            'putovanja' => $putovanja
        ]);
    }

    public function show($putovanje_id)
    {
        $putovanje = Putovanje::find($putovanje_id);
        $studenti = $putovanje->studenti;
        $dogadjaj = $putovanje->dogadjaj;
        $zauzeta_mesta = array();
        foreach ($studenti as  $student) {
            array_push($zauzeta_mesta, $student->numerisano_mesto);
        }
        $sva_mesta = range(1, $dogadjaj->broj_mesta);
        $slobodna_mesta = array_diff($sva_mesta, $zauzeta_mesta);

        return view('putovanje', [
            'putovanje' => $putovanje,
            'studenti' => $studenti,
            'dogadjaj' => $dogadjaj,
            'slobodna_mesta' => $slobodna_mesta
        ]);
    }

    public function destroy($putovanje_id)
    {
        $putovanje = Putovanje::find($putovanje_id);
        $putovanje->delete();
    }
}
