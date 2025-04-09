<div class="col-md-4 sidebar-container">
    <div class="text-break" id="personal_card" style="box-shadow: 0px 0px 4px;">
        <div class="d-flex d-lg-flex flex-column align-items-center align-items-lg-center">
            <img id="personal-card-photo" src="{{ asset('storage/'.$current_user->avatar) }}" style="box-shadow: 0px 0px 8px;">
            <span id="personal-card-company-name" style="text-align: center;font-size: 14px;color: var(--bs-gray);font-family: 'Arsenal SC', sans-serif;">Microsift</span>
            <span id="personal-card-personal-name" style="text-align: center;font-size: 18px;color: var(--bs-dark);font-family: 'BIZ UDPGothic', sans-serif;font-weight: bold;">{{ $current_user->name }} ({{ $current_user->email }})</span>
        </div>
        <div id="personal-card-data">
            <div class="text-break"><span style="font-size: 18px;font-family: Carlito, sans-serif;">Position: </span>
                <span class="text-break" style="font-size: 18px;font-family: Carlito, sans-serif;font-weight: bold;">{{ $current_user->position->name }}</span></div>
            <div class="text-break"><span style="font-size: 18px;font-family: Carlito, sans-serif;">Salary: </span>
                <span class="text-break" style="font-size: 18px;font-family: Carlito, sans-serif;font-weight: bold;">{{ $current_user->salary }}</span></div>
            <div class="text-break"><span style="font-size: 18px;font-family: Carlito, sans-serif;">Access level: </span>
                <span class="text-break" style="font-size: 18px;font-family: Carlito, sans-serif;font-weight: bold;">{{ $current_user->accessLevel->name }}</span></div><a class="btn btn-primary" role="button" style="width: 100%;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pencil-fill">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                </svg></a>
        </div>
    </div>
    <h3 style="font-family: 'BIZ UDPGothic', sans-serif;">Last tasks:</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th style="width: 180px;">Task</th>
                <th>End Date</th>
            </tr>
            </thead>
            <tbody>
                @foreach($last_tasks as $task)
                    <tr>
                        <td style="width: 180px;">
                            <a href="{{ route('task', $task->id) }}">
                                {{ $task->title }}
                            </a>
                        </td>
                        <td>{{ $task->deadline }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div><!-- Start: Powerful Calendar -->
    <section class="mt-5 calendar-container" style="width: 100%;">
        <div class="container" style="padding: 0;">
            <div class="row">
                <div class="col-xl-4 calendar-item">
                    <div class="calendar-wrapper"></div>
                </div>
            </div>
        </div>
    </section><!-- End: Powerful Calendar -->
</div>
