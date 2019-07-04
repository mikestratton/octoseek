<?php

namespace App\Http\Controllers;

use App\Attorney;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttorneyController extends Controller
{
    public function example(){

//        $attorneys = Attorney::where('id', 1)->get();

        $att_web = Attorney::where('website', '!=', '')
            ->inRandomOrder()
            ->limit(20)
            ->get();

        $att_pho = Attorney::where('phone', '!=', '')
            ->where('website', '!=', '')
            ->inRandomOrder()
            ->limit(20)
            ->get();

        $att_sal = Attorney::where('sales', '>', 1000000)
            ->inRandomOrder()
            ->limit(20)
            ->get();

        $att_add = Attorney::where('state', 'NY')
            ->inRandomOrder()
            ->limit(20)
            ->get();

        $att_alp = Attorney::where('state', 'NY')
            ->where('credit_score_alpha', '!=', '')
            ->inRandomOrder()
            ->limit(20)
            ->get();

        $att_emp = Attorney::where('employees', '>', '50')
            ->inRandomOrder()
            ->limit(20)
            ->get();

//        $pag = Attorney::where('website', '!=', '')->paginate(15);


        return view('data.attorneys.attorney-example',
            compact('att_web', 'att_pho', 'att_sal', 'att_add', 'att_alp', 'att_emp'));
    }

    public function fiveThousand(){

        $attorneys = Attorney::all();

        $ak = Attorney::where('state', '=', 'AL')->take(100);

        return 'it worked' . json_encode($ak);
    }


}
