@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Assignments</div>

                <div class="panel-body">
                    @if (Auth::user()->hasRole('admin'))
                        <button class="ui button" onclick="location.href='/assignment/add'">New Assignment</button>
                        <table class="ui sortable selectable celled table">
                            <thead>
                                <tr>
                                    <th class="">Tutor</th>
                                    <th class="">Student</th>
                                    <th class="">Course</th>
                                    <th class="">Professor</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($assignments as $assignment)
                                <tr onclick="location.href='/assignment/{{ $assignment->id }}'" style="cursor: pointer;">
                                    <td>{{ $assignment->tutor->name }}</td>
                                    <td>{{ $assignment->student->name }}</td>
                                    <td>{{ $assignment->course->department }}-{{ $assignment->course->number }} {{ $assignment->course->description }}</td>
                                    <td>{{ $assignment->professor->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                    @if (Auth::user()->hasRole('tutor'))
                        <table class="ui sortable selectable celled table">
                            <thead>
                                <tr>
                                    <th class="">Student</th>
                                    <th class="">Course</th>
                                    <th class="">Professor</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($tutor_assignments as $assignment)
                                <tr onclick="location.href='/assignment/{{ $assignment->id }}'" style="cursor: pointer;">
                                    <td>{{ $assignment->student->name }}</td>
                                    <td>{{ $assignment->course->department }}-{{ $assignment->course->number }} {{ $assignment->course->description }}</td>
                                    <td>{{ $assignment->professor->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                    @if (Auth::user()->hasRole('professor'))
                        <table class="ui sortable selectable celled table">
                            <thead>
                                <tr>
                                    <th class="">Tutor</th>
                                    <th class="">Student</th>
                                    <th class="">Course</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($professor_assignments as $assignment)
                                <tr onclick="location.href='/assignment/{{ $assignment->id }}'" style="cursor: pointer;">
                                    <td>{{ $assignment->tutor->name }}</td>
                                    <td>{{ $assignment->student->name }}</td>
                                    <td>{{ $assignment->course->department }}-{{ $assignment->course->number }} {{ $assignment->course->description }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
