<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //








    public function view()
    {
        return view('admin.dashboard');
    }
    public function code()
    {
        return view('admin.code');
    }
    public function add()
    {
        return view('admin.addpayment');
    }

    public function payment()
    {
        return view('admin.payment');
    }
}
