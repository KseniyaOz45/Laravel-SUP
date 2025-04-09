<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    public function index()
    {
        $clients = Client::paginate(10);
        return view('clients', compact('clients'));
    }

    public function client_details($name)
    {
        $client = Client::where('name', $name)->first();
        return view('client_details', compact('client'));
    }
}
