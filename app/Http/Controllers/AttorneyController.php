<?php

namespace App\Http\Controllers;

use App\Attorney;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttorneyController extends Controller
{
    public function example(){

        $attorneys = Attorney::all()->random(10);

        return view('data.attorneys.attorney-example', compact('attorneys'));
    }


}
