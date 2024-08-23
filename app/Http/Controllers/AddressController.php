<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $r)
    {
        $addresses = Address::all();
        return $addresses;
    }

    public function findOne(Request $r)
    {
        $address = Address::find($r->id);
        return $address;
    }

    public function insert(Request $r)
    {
        $raw_data = $r->only(['address']);

        $address = Address::create($raw_data);
        return $address;
    }
}
