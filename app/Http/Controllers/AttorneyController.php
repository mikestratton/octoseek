<?php

namespace App\Http\Controllers;

use App\Attorney;
use Illuminate\Http\Request;

class AttorneyController extends Controller
{
    public function example(){

        return view('data.attorneys.attorney-example');
    }
}
