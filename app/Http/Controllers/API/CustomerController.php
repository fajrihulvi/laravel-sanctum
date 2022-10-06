<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Exception;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::all();

        return response()->json([
            'data' => $data,
        ]);
    }
}
