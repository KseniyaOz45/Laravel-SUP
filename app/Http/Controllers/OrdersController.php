<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    //
    public function order_details($batch_number){
        $order = Order::where('batch_number', $batch_number)->first();
        return view('order_details', compact('order'));
    }

    public function create()
    {
        $inventory = Inventory::all();
        $clients = Client::all();
        $statuses = OrderStatus::all();
        $title = 'Create Order';
        return view('order_form', [
            'order' => new Order(),
            'inventory' => $inventory,
            'clients' => $clients,
            'statuses' => $statuses,
            'title' => $title
        ]);
    }

    public function edit(Order $order)
    {
        $inventory = Inventory::all();
        $clients = Client::all();
        $statuses = OrderStatus::all();
        $title = "$order->batch_number - Update";
        return view('order_form',
            compact('order', 'inventory', 'clients', 'statuses', 'title'));
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->personal_id = Auth::id(); // короче и красиво
        $order->batch_number = $request->input('batch_number');
        $order->inventory_id = $request->input('inventory_id');
        $order->client_id = $request->input('client_id');
        $order->quantity = $request->input('quantity');
        $order->status_id = $request->input('status_id');
        $order->save();

        return redirect()->route('ordersMenu');
    }

    public function update(Request $request, Order $order)
    {
        $order->batch_number = $request->input('batch_number');
        $order->inventory_id = $request->input('inventory_id');
        $order->client_id = $request->input('client_id');
        $order->quantity = $request->input('quantity');
        $order->status_id = $request->input('status_id');
        $order->save();

        return redirect()->route('ordersMenu');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('ordersMenu');
    }
}
