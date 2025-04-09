@extends('layouts.main')
@section('title', 'Inventory: '.$inventory->batch_number)

@section('content')
    <section id="content">
        <!-- Start: Sidebar -->
        <div class="container" id="sidebar">
            <div class="row">
                <div class="col-md-8">
                    <h1 style="font-family: 'BIZ UDPGothic', sans-serif;font-weight: bold;">Inventory: {{ $inventory->batch_number }}</h1>
                    <div class="row d-lg-flex">
                        <div class="col">
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Name:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $inventory->name }}</span>
                            </div>
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Price:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $inventory->price }}</span>
                            </div>
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Type:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $inventory->type->name }}</span>
                            </div>
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Manufacturer:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $inventory->manufacturer->name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div><!-- End: Sidebar -->
    </section>
@endsection


