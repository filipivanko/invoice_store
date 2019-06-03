<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\certifikat_file_set;

class IndexController extends Controller
{
    public function index(){
        $certifikati = certifikat_file_set::all();
        return view('pages.index')->with("certifikati",$certifikati);
    }
}
