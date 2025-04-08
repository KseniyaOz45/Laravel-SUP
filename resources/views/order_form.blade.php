@extends('layouts.main')
@section('title', $title)

@section('content')
    <section id="content">
        <!-- Start: Sidebar -->
        <div class="container" id="sidebar">
            <div class="row">
                <div class="col-md-8">
                    <h1> {{ $order->exists ? 'Create' : 'Update' }} order</h1>
                    <form id="order-form" method="post" action="{{ $order->exists ? route('orders.update', $order) : route('orders.store') }}">
                        @csrf
                        @if($order->exists)
                            @method('PUT')
                        @endif

                        <div id="order-form-container">
                            <div>
                                <label class="form-label arsenal-font fw-bold" for="batch_number">Batch number</label>
                                <input class="form-control arsenal-font" type="text" id="batch_number" name="batch_number"
                                       value="{{ old('batch_number', $order->batch_number) }}">
                            </div>

                            <div>
                                <label class="form-label arsenal-font fw-bold" for="inventory_id">Inventory</label>
                                <select class="form-select arsenal-font" id="inventory_id" name="inventory_id">
                                    @foreach($inventory as $inv)
                                        <option value="{{ $inv->id }}" @selected(old('inventory_id', $order->inventory_id) == $inv->id)>
                                            {{ $inv->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="form-label arsenal-font fw-bold" for="client_id">Client</label>
                                <select class="form-select arsenal-font" id="client_id" name="client_id">
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}" @selected(old('client_id', $order->client_id) == $client->id)>
                                            {{ $client->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label class="form-label arsenal-font fw-bold" for="quantity">Quantity</label>
                                <input class="form-control arsenal-font" type="number" id="quantity" name="quantity" min="0"
                                       value="{{ old('quantity', $order->quantity) }}">
                            </div>

                            <div>
                                <label class="form-label arsenal-font fw-bold" for="status_id">Status</label>
                                <select class="form-select arsenal-font" id="status_id" name="status_id">
                                    @foreach($statuses as $status)
                                        <option value="{{ $status->id }}" @selected(old('status_id', $order->status_id) == $status->id)>
                                            {{ $status->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <input class="btn btn-primary arsenal-font mt-4" type="submit" value="Save">
                    </form>
                </div>
                @include('layouts.sidebar')
            </div>
        </div><!-- End: Sidebar -->
    </section>
@endsection
