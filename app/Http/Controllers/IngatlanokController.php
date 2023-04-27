<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ingatlanok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngatlanokController extends Controller
{
    public function index(){
        $ingatlanok = response()->json(ingatlanok::all());
        return $ingatlanok;
    }

    public function ingatpluskateg(){
        $ingatlanok = DB::select(DB::raw("select * from ingatlanoks ing, kategoriaks kat 
        where ing.kategoria = kat.id "));
        return $ingatlanok;
    }

    public function ujIngatlan(Request $request){
        $input = new ingatlanok();
        $input->kategoria = $request->kategoria;
        $input->leiras = $request->leiras;
        $input->hirdetesDatuma = $request->hirdetesDatuma;
        $input->tehermentes = $request->tehermentes;
        $input->ar = $request->ar;
        $input->kepUrl = $request->kepUrl;
        $input->save();
        return $input;
    }

    public function torlesIngatlan($id){
        ingatlanok::find($id)->delete();
        
    }
}
