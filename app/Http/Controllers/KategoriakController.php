<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kategoriak;
use Illuminate\Http\Request;

class KategoriakController extends Controller
{
    public function index(){
        $ingatlanok = response()->json(kategoriak::all());
        return $ingatlanok;
    }
}
