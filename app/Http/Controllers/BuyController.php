<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function createid() {
        
    }

    public showAll() {
        $buy = Buy::all();
        return response()->json($buy, 200);
    }

    public showId($id) {
        $buy = Buy::find($id);
        return response()->json($buy, 200);
    }

    public function delete($id) {
        $buy = Buy::find($id);
        $buy->delete();
        return response()->json(['Запись удалена.'], 200);
    }

    public function add(Request $request) {

        $Pokypatel_name = $request->input('Pokypatel_name');
        $pokypki = $request->input('pokypki');
        $summa = $request->input('summa');
        $sposob_oplati = $request->input('sposob_oplati');

        $buy = new Buy();
        $buy->Pokypatel_name = $Pokypatel_name;
        $buy->pokypki = $pokypki;
        $buy->summa = $summa;
        $buy->sposob_oplati = $sposob_oplati

        $buy->save();

        return response()->json($buy, 200);
    }

    public function edit($id, Request $request) {
        $buy = Buy::find($id);

        $Pokypatel_name = $request->input('Pokypatel_name');
        $pokypki = $request->input('pokypki');
        $summa = $request->input('summa');
        $sposob_oplati = $request->input('sposob_oplati');

        $buy = new Buy();
        $buy->Pokypatel_name = $Pokypatel_name;
        $buy->pokypki = $pokypki;
        $buy->summa = $summa;
        $buy->sposob_oplati = $sposob_oplati

        $buy->save();

        return response()->json($buy, 200);
    }


    //
}
