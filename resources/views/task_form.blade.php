@extends('layouts.main')
@section('title', $task->id.' - Update')

@section('content')
    <section id="content">
        <!-- Start: Sidebar -->
        <div class="container" id="sidebar">
            <div class="row">
                <div class="col-md-8">
                    <h1>Update task status</h1>
                    <form id="order-form" method="post" action="{{ route('tasks.update', $task) }}">
                        @csrf
                        @method('PUT')
                        <div id="order-form-container">
                            <div>
                                <label class="form-label arsenal-font fw-bold" for="status_id">Status</label>
                                <select class="form-select arsenal-font" id="status_id" name="status_id">
                                    @foreach($statuses as $status)
                                        <option value="{{ $status->id }}"
                                            @selected(old('status_id', $task->status_id) == $status->id)>
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
