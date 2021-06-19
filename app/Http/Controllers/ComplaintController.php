<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ComplaintController extends Controller
{
    public function index()
    {
        $agencies = DB::table('agencies')->select(['id', 'name'])->get();

        return view('complaint', compact('agencies'));
    }
}
