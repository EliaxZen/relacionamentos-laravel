<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    public function index(){
        $invoice = Invoice::all();
    }

    public function insert(){

    }
}
