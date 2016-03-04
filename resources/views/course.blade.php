@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Course: {{ $course->description }}</div>
                <div class="panel-body">
                    <div>Department: {{ $course->department }}</div>
                    <div>Course number: {{ $course->number }}</div>
                    <div>Course description: {{ $course->description }}</div>
                    <button type="button" onclick="location.href = '/course/edit/{{ $course->id }}';">Edit</button>
                    <button type="button" onclick="location.href = '/courses';">Back</button>
                    @if ($course->professors()->first())
                        <div class="sublist">
                            <div class="sublist-header">Professors:</div>
                            @foreach ($course->professors as $professor)
                                <div class="list-item">{{ $professor->name }}</div>
                            @endforeach
                        </div>
                    @endif
                    @if ($course->tutors()->first())
                        <div class="sublist">
                            <div class="sublist-header">Tutors:</div>
                            @foreach ($course->tutors as $tutor)
                                <div class="list-item">{{ $tutor->name }}</div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
