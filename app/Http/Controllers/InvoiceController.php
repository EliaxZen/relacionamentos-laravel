<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    public function index(Request $r){
        $invoices = Invoice::all();
        return $invoices;
    }

    public function insert(Request $r){
        $raw_data = $r->only(['description', 'valor', 'address_id', 'user_id']);
        
        $invoice = Invoice::create($raw_data);
        return $invoice;
    }
}
