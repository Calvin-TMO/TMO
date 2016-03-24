@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Assignment</div>

                <div class="panel-body">
                    <table class="ui celled table">
                        <thead>
                            <tr>
                                <th class="">Tutor</th>
                                <th class="">Student</th>
                                <th class="">Course</th>
                                <th class="">Professor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="selectable"><a href="/user/{{ $assignment->tutor->id }}">{{ $assignment->tutor->name }}</a></td>
                                <td class="selectable"><a href="/user/{{ $assignment->student->id }}">{{ $assignment->student->name }}</a></td>
                                <td class="selectable"><a href="/course/{{ $assignment->course->id }}">{{ $assignment->course->department }}-{{ $assignment->course->number }} {{ $assignment->course->description }}</a></td>
                                <td class="selectable"><a href="/user/{{ $assignment->professor->id }}">{{ $assignment->professor->name }}</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="ui button" onclick="location.href='/assignment/edit/{{ $assignment->id }}';">Edit</button>
                    <button type="button" class="ui button" onclick="location.href = '/assignments';">Back</button>
                </div>

                <div class="panel-body">
                    <button type="button" class="ui button" onclick="location.href = '/report/add/{{ $assignment->id }}'">New Report</button>
                </div>

                <div class="panel-body">
                    <table class="ui sortable selectable celled table">
                        <thead>
                            <tr>
                                <th class="default-sort desc">Submit Date</th>
                                <th class="">Topic</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($reports as $report)
                            <tr onclick="location.href='/report/{{ $report->id }}'" style="cursor: pointer;">
                                <td>{{ $report->submit_date }}</td>
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
