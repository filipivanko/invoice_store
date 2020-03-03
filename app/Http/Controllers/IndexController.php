<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\certifikat_file_set;
use App\Invoice;

class IndexController extends Controller
{
    public function index(){
       return view('pages.index')->with('all_invoices',Invoice::all());
    }
}
