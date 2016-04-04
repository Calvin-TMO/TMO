@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Assignment</div>

                <div class="panel-body">
                    <form method="POST" action="/assignment/edit">
                        <div>Tutor:
                            <select class="ui fluid search dropdown" name="tutor">
                                <option value="">Tutor</option>
                                @foreach ($tutors as $tutor)
                                    <option @if($tutor->id == $assignment->tutor->id)
                                                selected
                                            @endif value="{{ $tutor->id }}">{{ $tutor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>Student:
                            <select class="ui fluid search dropdown" name="student">
                                <option value="">Student</option>
                                @foreach ($students as $student)
                                    <option @if($student->id == $assignment->student->id)
                                                selected
                                            @endif value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>Course:
                            <select class="ui fluid search dropdown" name="course">
                                <option value="">Course</option>
                                @foreach ($courses as $course)
                                    <option @if($course->id == $assignment->course->id)
                                                selected
                                            @endif value="{{ $course->id }}">{{ $course->department }}-{{ $course->number }} {{ $course->description }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>Professor:
                            <select class="ui fluid search dropdown" name="professor">
                                <option value="">Professor</option>
                                @foreach ($professors as $professor)
                                    <option @if($professor->id == $assignment->professor->id)
                                                selected
                                            @endif value="{{ $professor->id }}">{{ $professor->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="hidden" name="assignment_id" value="{{ $assignment->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="ui primary button">Save</button>
                        <button type="button" class="ui button" onclick="location.href='/assignment/{{ $assignment->id }}'">Discard</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.ui.dropdown')
        .dropdown()
    ;
</script>
@endsection
