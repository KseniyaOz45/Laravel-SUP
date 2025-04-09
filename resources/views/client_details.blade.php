@extends('layouts.main')
@section('title', 'Client: '.$client->name)

@section('content')
    <section id="content">
        <!-- Start: Sidebar -->
        <div class="container" id="sidebar">
            <div class="row">
                <div class="col-md-8">
                    <h1 style="font-family: 'BIZ UDPGothic', sans-serif;font-weight: bold;">Client: {{ $client->name }}</h1>
                    <div class="row d-lg-flex">
                        <div class="col d-flex d-sm-flex d-lg-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center align-items-lg-center">
                            <img id="manufacturer-image" src="{{ asset('storage/'.$client->logo) }}">
                        </div>
                        <div class="col">
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Email:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $client->email }}</span>
                            </div>
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Phone:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $client->phone }}</span>
                            </div>
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Address:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $client->address }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div><!-- End: Sidebar -->
    </section>
@endsection

