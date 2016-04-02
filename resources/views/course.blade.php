@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Course: {{ $course->description }}</div>
                <div class="panel-body">
                    <table class="ui celled table">
                        <thead>
                            <tr>
                                <th class="">Department</th>
                                <th class="">Course Number</th>
                                <th class="">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $course->department }}</td>
                                <td>{{ $course->number }}</td>
                                <td>{{ $course->description }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <button type="button" class="ui button" onclick="location.href = '/course/edit/{{ $course->id }}';">Edit</button>
                    <button type="button" class="ui button" onclick="location.href = '/courses';">Back</button>
                    @if ($course->professors()->first())
                        <div class="sublist">
                            <div class="sublist-header">Professors:</div>
                            @foreach ($course->professors as $professor)
                                <div class="list-item"><a href="/user/{{ $professor->id }}">{{ $professor->name }}</a></div>
                            @endforeach
                        </div>
                    @endif
                    @if ($course->tutors()->first())
                        <div class="sublist">
                            <div class="sublist-header">Tutors:</div>
                            @foreach ($course->tutors as $tutor)
                                <div class="list-item"><a href="/user/{{ $tutor->id }}">{{ $tutor->name }}</a></div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
