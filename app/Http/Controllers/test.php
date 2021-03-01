<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class test extends Controller
{
    public function test()
    {
        $test = DB::select('select * from UTILISATEUR');
        return view('test', compact('test'));
    }
}
