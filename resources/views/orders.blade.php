@extends('layouts.main')
@section('title', 'My orders')

@section('content')
    <section id="content">
        <div class="container" id="sidebar">
            <div class="row">
                <div class="col-md-8">
                    <div class="d-lg-flex justify-content-between align-items-lg-center">
                        <h1 style="font-family: 'BIZ UDPGothic', sans-serif;font-weight: bold;">Orders</h1><a class="btn btn-primary" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-lg">
                                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"></path>
                            </svg></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Client</th>
                                <th>Inventory</th>
                                <th>Quantity</th>
                                <th>Sum</th>
                                <th>Status</th>
                                <th class="d-lg-flex justify-content-lg-center align-items-lg-center"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-gear-fill d-lg-flex justify-content-lg-center align-items-lg-center" style="width: 20px;height: 30px;">
                                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"></path>
                                    </svg></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($user_orders as $order)
                                    <tr>
                                        <td class="text-truncate text-break" style="max-width: 120px;">{{ $order->batch_number }}</td>
                                        <td class="text-truncate text-break" style="max-width: 120px;">{{ $order->client->name }}</td>
                                        <td class="text-truncate text-break" style="max-width: 120px;">{{ $order->inventory->name }}</td>
                                        <td class="text-truncate text-break" style="max-width: 120px;">{{ $order->quantity }}</td>
                                        <td class="text-truncate text-break" style="max-width: 120px;">{{ $order->sum }}</td>
                                        <td class="text-truncate text-break" style="max-width: 120px;">{{ $order->status->name }}</td>
                                        <td class="text-truncate text-break d-lg-flex justify-content-lg-center table_actions_container"><a class="btn btn-primary d-lg-flex justify-content-lg-center align-items-lg-center" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pencil-fill" style="font-size: 17px;">
                                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                                                </svg></a><a class="btn btn-primary d-lg-flex justify-content-lg-center align-items-lg-center" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 17px;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17 5V4C17 2.89543 16.1046 2 15 2H9C7.89543 2 7 2.89543 7 4V5H4C3.44772 5 3 5.44772 3 6C3 6.55228 3.44772 7 4 7H5V18C5 19.6569 6.34315 21 8 21H16C17.6569 21 19 19.6569 19 18V7H20C20.5523 7 21 6.55228 21 6C21 5.44772 20.5523 5 20 5H17ZM15 4H9V5H15V4ZM17 7H7V18C7 18.5523 7.44772 19 8 19H16C16.5523 19 17 18.5523 17 18V7Z" fill="currentColor"></path>
                                                    <path d="M9 9H11V17H9V9Z" fill="currentColor"></path>
                                                    <path d="M13 9H15V17H13V9Z" fill="currentColor"></path>
                                                </svg></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <nav class="d-flex d-lg-flex justify-content-center justify-content-lg-center align-items-lg-center">
                        {{ $user_orders->links() }}
                    </nav>
                </div>
                @include('layouts.sidebar')
            </div>
        </div><!-- End: Sidebar -->
    </section>
@endsection
