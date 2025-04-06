<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalMenuController extends Controller
{
    //
    public function ordersMenu()
    {
        return view('orders');
    }
}
