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
        $raw_data = $r->only(['description', 'valor', 'user_id', 'address_id']);
        
        $invoice = Invoice::create($raw_data);
        return $invoice;
    }
}
