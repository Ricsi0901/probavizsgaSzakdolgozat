<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Szakdolgozat;

class szakdolgozatController extends Controller
{
    public function index() {
        $eszkozok=Szakdolgozat::all();
        return response()->json($eszkozok);
    }
    public function store(Request $request) {
        $szakdoga_nev = $request->input("szakdoga_nev");
        $githublink = $request->input("githublink");
        $oldallink = $request->input("oldallink");
        $tagokneve = $request->input("tagokneve");
        

        $eszkoz = new Szakdolgozat;
        $eszkoz->szakdoga_nev = $szakdoga_nev;
        $eszkoz->githublink = $githublink;
        $eszkoz->oldallink = $oldallink;
        $eszkoz->tagokneve = $tagokneve;
       
        
        $eszkoz->save();


        return response()->json(true);
    }
    public function update(Request $request, string $eszkozId) {
        $szakdoga_nev = $request->input("szakdoga_nev");
        $githublink = $request->input("githublink");
        $oldallink = $request->input("oldallink");
        $tagokneve = $request->input("tagokneve");
        

        $eszkoz = Szakdolgozat::find($eszkozId);
        $eszkoz->szakdoga_nev = $szakdoga_nev;
        $eszkoz->githublink = $githublink;
        $eszkoz->oldallink = $oldallink;
        $eszkoz->tagokneve = $tagokneve;
        
        $eszkoz->save();


        return response()->json(true);
    }
    public function destroy(string $eszkozId) {
        $eszkoz = Szakdolgozat::find($eszkozId);

        $eszkoz->delete();
        return response()->json(true);
    }
}
