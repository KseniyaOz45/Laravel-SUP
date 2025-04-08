<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    //
    public function order_details($batch_number){
        $order = Order::where('batch_number', $batch_number)->first();
        return view('order_details', compact('order'));
    }
}
