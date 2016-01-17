@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            <!-- Sportsmen -->
            @if (count($sportsmen) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sportsmen Table
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                            <th>ID</th>
                            <th>Number</th>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Start time</th>
                            <th>Finish time</th>
                            </thead>
                            <tbody>
                            @foreach ($sportsmen as $sportsman)
                                <tr>
                                    <td class="table-text"><div>{{ $sportsman->id }}</div></td>
                                    <td class="table-text"><div>{{ $sportsman->sportsman_number }}</div></td>
                                    <td class="table-text"><div>{{ $sportsman->name }}</div></td>
                                    <td class="table-text"><div>{{ $sportsman->last_name }}</div></td>
                                    <td class="table-text"><div>{{ $sportsman->start_time }}</div></td>
                                    <td class="table-text"><div>{{ $sportsman->finish_time }}</div></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <div class="panel-body">
                    <div>Sportsmen database is empty</div>
                    <div><a href="/edit">Add sportsman</a></div>
                </div>
            @endif
        </div>
    </div>
@endsection