@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            <!-- Current Sportsmen -->
            @if (count($sportsmen) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Existing Sportsmen
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                            <th>ID</th>
                            <th>SpotID</th>
                            <th>Time at this spot</th>
                            </thead>
                            <tbody>
                            @foreach ($sportsmen as $sportsman)
                                <tr>
                                    <td class="table-text"><div>{{ $sportsman->id }}</div></td>
                                    <td class="table-text"><div>{{ $spotID }}</div></td>
                                    <td class="table-text"><div>{{ $start_time[$sportsman->id-1] }}</div></td>
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