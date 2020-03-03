<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function displayAllInvoices(){
        return view('pages.invoices')->with('all_invoices',Invoice::all());
    }
}
