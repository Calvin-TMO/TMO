@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All Reports</div>
                <div class="panel-body">
                    @if (Auth::user()->hasRole('tutor') || Auth::user()->hasRole('admin'))
                        <button class="ui button" onclick="location.href='/report/add'">New Report</button>
                    @endif
                    <table class="ui sortable selectable celled table">
                        <thead>
                            <tr>
                                <th class="">Tutor</th>
                                <th class="">Student</th>
                                <th class="">Course</th>
                                <th class="default-sort desc">Session Date</th>
                                <th class="">Topic</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($reports as $report)
                            <tr onclick="location.href='/report/{{ $report->id }}'" style="cursor: pointer;">
                                <td>{{ $report->assignment->tutor->name }}</td>
                                <td>{{ $report->assignment->student->name }}</td>
                                <td>{{ $report->assignment->course->description }}</td>
                                <td>{{ $report->session_date }}</td>
                                <td>{{ $report->topic }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
