<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pricing() {

        return view('pages.pricing');
    }

    public function order() {

        return view('pages.order');
    }
}
