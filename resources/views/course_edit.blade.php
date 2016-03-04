@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Course: {{ $course->description }}</div>

                <div class="panel-body">
                    <form method="POST">
                        <div>Department: <input type="text" name="department" value="{{ $course->department }}"></div>
                        <div>Course number: <input type="text" name="number" value="{{ $course->number }}"></div>
                        <div>Course description: <input type="text" name="description" value="{{ $course->description }}"></div> 
                        <input type="submit" value="Save">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" onclick="location.href='/course/{{ $course->id }}'">Cancel</button>
                    </form>
                    <div class="sublist">
                        <div class="sublist-header">Professors:</div>
                        @foreach ($course->professors as $professor)
                            <div class="list-item">
                                <button type="button" onclick="location.href='/course/professor/delete/{{ $course->id }}/{{ $professor->id }}'">Remove</button>
                                {{ $professor->name }}
                            </div>
                        @endforeach
                        <form class="sublist-add" method="POST" action="/course/professor/add/{{ $course->id }}">
                            <select name="professor">
                                <option value="">Select professor to add...</option>
                                @foreach ($professors as $professor)
                                    <option value="{{ $professor->id }}">{{ $professor->name }}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="Add New Professor">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                    <div class="sublist">
                        <div class="sublist-header">Tutors:</div>
                        @foreach ($course->tutors as $tutor)
                            <div class="list-item">
                                <button type="button" onclick="location.href='/course/tutor/delete/{{ $course->id }}/{{ $tutor->id }}'">Remove</button>
                                {{ $tutor->name }}
                            </div>
                        @endforeach
                        <form class="sublist-add" method="POST" action="/course/tutor/add/{{ $course->id }}">
                            <select name="tutor">
                                <option value="">Select tutor to add...</option>
                                @foreach ($tutors as $tutor)
                                    <option value="{{ $tutor->id }}">{{ $tutor->name }}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="Add New Tutor">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
