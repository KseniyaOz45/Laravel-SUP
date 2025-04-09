<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoriesController extends Controller
{
    //
    public function index()
    {
        $inventories = Inventory::paginate(10);
        return view('inventories', compact('inventories'));
    }

    public function inventory_details($batch_number)
    {
        $inventory = Inventory::where('batch_number', $batch_number)->first();
        return view('inventory_details', compact('inventory'));
    }
}
