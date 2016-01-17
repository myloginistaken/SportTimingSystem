@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Sportsman
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Sportsman Form -->
                    <form action="/sportsman" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Sportsman Number -->
                        <div class="form-group">
                            <label for="sportsman-number" class="col-sm-3 control-label">Number</label>

                            <div class="col-sm-6">
                                <input type="text" name="number" id="task-name" class="form-control" value="{{ old('sportsman') }}">
                            </div>
                        </div>

                        <!-- Sportsman Name -->
                        <div class="form-group">
                            <label for="sportsman-name" class="col-sm-3 control-label">First name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('sportsman') }}">
                            </div>
                        </div>

                        <!-- Sportsman Last Name -->
                        <div class="form-group">
                            <label for="sportsman-lastname" class="col-sm-3 control-label">Last name</label>

                            <div class="col-sm-6">
                                <input type="text" name="last_name" id="task-name" class="form-control" value="{{ old('sportsman') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add sportsman
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Existing Sportsmen -->
            @if (count($sportsmen) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Existing Sportsmen
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                            <th>ID</th>
                            <th>Number</th>
                            <th>Name</th>
                            <th>Last Name</th>
                            </thead>
                            <tbody>
                            @foreach ($sportsmen as $sportsman)
                                <tr>
                                    <td class="table-text"><div>{{ $sportsman->id }}</div></td>
                                    <td class="table-text"><div>{{ $sportsman->sportsman_number }}</div></td>
                                    <td class="table-text"><div>{{ $sportsman->name }}</div></td>
                                    <td class="table-text"><div>{{ $sportsman->last_name }}</div></td>

                                    <!-- Sportsman Delete Button -->
                                    <td>
                                        <form action="/sportsman/{{ $sportsman->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" id="delete-sportsman-{{ $sportsman->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection