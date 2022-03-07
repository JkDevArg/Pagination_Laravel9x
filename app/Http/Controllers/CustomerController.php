<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $data['q'] = $request->get('q');
        $data['customers'] = Customer::where('customer_name', 'like', '%' . $data['q'] . '%')->paginate(10)->withQueryString();
        return view('customer.index', $data);
    }
}
