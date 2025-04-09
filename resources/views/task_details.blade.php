@extends('layouts.main')
@section('title', 'Task: '.$task->id)

@section('content')
    <section id="content">
        <!-- Start: Sidebar -->
        <div class="container" id="sidebar">
            <div class="row">
                <div class="col-md-8">
                    <h1 style="font-family: 'BIZ UDPGothic', sans-serif;font-weight: bold;">Task: {{ $task->title }}</h1>
                    <div class="row d-lg-flex">
                        <div class="col">
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Description:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $task->description }}</span>
                            </div>
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Status:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $task->status->name }}</span>
                            </div>
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Started at:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $task->start_at }}</span>
                            </div>
                            <div>
                                <span style="font-family: 'Arsenal SC', sans-serif;font-size: 20px;font-weight: bold;">Deadline:&nbsp;&nbsp;</span>
                                <span class="text-break" style="font-family: 'Arsenal SC', sans-serif;font-size: 18px;">{{ $task->deadline }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div><!-- End: Sidebar -->
    </section>
@endsection

