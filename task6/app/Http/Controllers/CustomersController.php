<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;

class CustomersController extends Controller
{
    public function index()
    {
        echo "hello from CustomersController <br> to show all customers use this url:http://127.0.0.1:8000/show <br> Don't forget to import the database, it's in a folder named:db";
    }

    public function show()
    {
        $customers=customers::all();
        return $customers;
    }
}
