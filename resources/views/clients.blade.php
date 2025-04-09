@extends('layouts.main')
@section('title', 'Clients')

@section('content')
    <section id="content">
        <!-- Start: Sidebar -->
        <div class="container" id="sidebar">
            <div class="row">
                <div class="col-md-8">
                    <h1 style="font-family: 'BIZ UDPGothic', sans-serif;font-weight: bold;">Clients</h1>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td class="text-truncate text-break" style="max-width: 120px;">
                                            <a href="{{ route('client', $client->name) }}">
                                                {{ $client->name }}
                                            </a>
                                        </td>
                                        <td class="text-truncate text-break" style="max-width: 120px;">{{ $client->address }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <nav class="d-flex d-lg-flex justify-content-center justify-content-lg-center align-items-lg-center">
                        {{ $clients->links() }}
                    </nav>
                </div>
                @include('layouts.sidebar')
            </div>
        </div><!-- End: Sidebar -->
    </section>
@endsection

