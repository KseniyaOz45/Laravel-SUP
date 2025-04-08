@extends('layouts.main')
@section('title', 'Order: '.$order->batch_number)

@section('content')
    <section id="content">
        <!-- Start: Sidebar -->
        <div class="container" id="sidebar">
            <div class="row">
                <div class="col-md-8">
                    <h1 style="font-family: 'BIZ UDPGothic', sans-serif;font-weight: bold;">Order: {{ $order->batch_number }}</h1>
                    <div class="row d-lg-flex">
                        <div class="col d-flex d-sm-flex d-lg-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center align-items-lg-center">
                            <img id="manufacturer-image" src="{{ asset('storage/'.$order->client->logo) }}">
                        </div>
                        <div class="col">
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Client:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $order->client->name }}</span>
                            </div>
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Inventory:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $order->inventory->name }}</span>
                            </div>
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Quantity:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $order->quantity }}</span>
                            </div>
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Sum:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $order->sum }}</span>
                            </div>
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Status:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $order->status->name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div><!-- End: Sidebar -->
    </section>
@endsection

