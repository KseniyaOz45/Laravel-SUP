<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalMenuController extends Controller
{
    //
    public function ordersMenu()
    {
        $current_user = Auth::user();
        $user_orders = Order::where('personal_id', $current_user->id)->paginate(10);
        return view('orders', [
            'user_orders' => $user_orders
        ]);
    }
}
