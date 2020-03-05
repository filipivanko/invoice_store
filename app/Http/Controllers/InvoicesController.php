<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
/**
 * @mixin \Eloquent
 */

class InvoicesController extends Controller
{
    public function displayAllInvoices(){
        return view('pages.invoices')->with('all_invoices',Invoice::all());
    }
    public function storeInvoice(){
        var_dump(request('input1'));
        var_dump(request('input2'));
        var_dump(request('input3'));
    }
    public function showInvoice(){
        Invoice::first();

    }
}
