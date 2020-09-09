<?php

namespace App\Http\Controllers;
use DB;

class MainController extends Controller
{
    public function index()
    {
        $portfolios = DB::table('portfolio')->get();

        return view('main', compact('portfolios'));
    }


    public function addData()
    {
        return "";
    }
}
