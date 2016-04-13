@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tutor Evaluation</div>

                <div class="panel-body">
                @if ($user->hasRole('tutor'))
                    <table class="ui celled table">
                        <thead>
                            <tr>
                                <th class="">Name</th>
                                <th class="">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="selectable"><a href="/user/{{ $user->id }}">{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="sublist">
                        <div class="sublist-header">Tutor Assignments:</div>
                        <table class="ui sortable selectable celled table">
                            <thead>
                                <tr>
                                    <th class="default-sort asc">Student</th>
                                    <th class="">Course</th>
                                    <th class="">Professor</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($user->tutor_assignments as $assignment)
                                <tr onclick="location.href='/assignment/{{ $assignment->id }}'" style="cursor: pointer;">
                                    <td>{{ $assignment->student->name }}</td>
                                    <td>{{ $assignment->course->department }}-{{ $assignment->course->number }} {{ $assignment->course->description }}</td>
                                    <td>{{ $assignment->professor->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-body">
                        <p>Number of assignments: {{ $assignment_count }}</p>
                        <p>Number of reports: {{ $report_count }}</p>
                    </div>
                @else
                    <h1>Invalid User:</h1>
                    <p>The specified user is not a tutor.</p>
                @endif
                    <button type="button" class="ui button" onclick="location.href = '/evals';">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
