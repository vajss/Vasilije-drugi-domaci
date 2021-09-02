<?php

namespace App\Http\Controllers;

use App\Models\Dogadjaj;
use Illuminate\Http\Request;

class DogadjajController extends Controller
{
    public function get()
    {
        $dogadjaji = Dogadjaj::all();

        return response()->json([
            'dogadjaji' => $dogadjaji,
        ]);
    }
    public function show($id)
    {
        $dogadjaj = Dogadjaj::find($id);
        $putovanja = $dogadjaj->putovanja;

        return view('dogadjaj', [
            'dogadjaj' => $dogadjaj,
            'putovanja' => $putovanja,
        ]);
    }
}
