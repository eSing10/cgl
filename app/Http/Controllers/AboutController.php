<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index()
    {
        $var1 = 1;
        $teams = DB::table('teams')->first();
        return view('about',
            ['data'=>$teams]
        );
   }
}
