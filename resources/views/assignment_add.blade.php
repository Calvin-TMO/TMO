@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Assignment</div>

                <div class="panel-body">
                    <form method="POST">
                        <div>Tutor:
                            <select name="tutor">
                                @foreach ($tutors as $tutor)
                                    <option value="{{ $tutor->id }}">{{ $tutor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>Student:
                            <select name="student">
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>Course:
                            <select name="course">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->department }}-{{ $course->number }} {{ $course->description }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>Professor:
                            <select name="professor">
                                @foreach ($professors as $professor)
                                    <option value="{{ $professor->id }}">{{ $professor->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="submit" value="Save">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" onclick="location.href='/assignments">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
