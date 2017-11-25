<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\renal;
use DB;
class ControllerRenal extends Controller
{
    public function index()
    {
    	$variable = renal::all('desayuno', 'almuerzo', 'cena');
    	return view('home')->with('renal', $variable);
    }

}
