@extends('layouts.main')
@section('title', 'Inventories')

@section('content')
    <section id="content">
        <!-- Start: Sidebar -->
        <div class="container" id="sidebar">
            <div class="row">
                <div class="col-md-8">
                    <h1 style="font-family: 'BIZ UDPGothic', sans-serif;font-weight: bold;">Inventories</h1>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Batch Num</th>
                                <th>Name</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($inventories as $inv)
                                    <tr>
                                        <td class="text-truncate text-break" style="max-width: 120px;">
                                            <a href="{{ route('inventory', $inv->batch_number) }}">
                                                {{ $inv->batch_number }}
                                            </a>
                                        </td>
                                        <td class="text-truncate text-break" style="max-width: 120px;">{{ $inv->name }}</td>
                                        <td class="text-truncate text-break" style="max-width: 120px;">{{ $inv->price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <nav class="d-flex d-lg-flex justify-content-center justify-content-lg-center align-items-lg-center">
                        {{ $inventories->links() }}
                    </nav>
                </div>
                @include('layouts.sidebar')
            </div>
        </div><!-- End: Sidebar -->
    </section>
@endsection
