<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class homeController extends Controller
{
    public function index()
    {
        $ct = DB::select('select * from categories');
        dd($ct);
     }

    public function contact()
    {
        return view('contact');
    }
}
