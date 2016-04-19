@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Assignment</div>

                <div class="panel-body">
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                              {{ Session::get('error') }}
                        </div>
                    @endif
                    <form method="POST" action="/assignment/edit/{{ $assignment->id }}">
                        <div>Student:
                            <select class="ui fluid search dropdown" name="student" required>
                                <option value="">Student</option>
                                @foreach ($students as $student)
                                    @if ($old->has('student'))
                                        <option value="{{ $student->id }}" @if ($student->id == $old->student) selected @endif>{{ $student->name }}</option>
                                    @else
                                    <option @if($student->id == $assignment->student->id)
                                                selected
                                            @endif
                                            value="{{ $student->id }}">{{ $student->name }}
                                    </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div>Course:
                            <select class="ui fluid search dropdown" name="course" required>
                                <option value="">Course</option>
                                @foreach ($courses as $course)
                                    @if ($old->has('course'))
                                        <option value="{{ $course->id }}" @if ($course->id == $old->course) selected @endif>{{ $course->department }}-{{ $course->number }} {{ $course->description }}</option>
                                    @else
                                    <option @if($course->id == $assignment->course->id)
                                                selected
                                            @endif
                                            value="{{ $course->id }}">{{ $course->department }}-{{ $course->number }} {{ $course->description }}
                                    </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div>Professor:
                            <select class="ui fluid search dropdown" name="professor" required>
                                <option value="">Professor</option>
                                @foreach ($professors as $professor)
                                    <option @if($professor->id == $assignment->professor->id)
                                                selected
                                            @endif value="{{ $professor->id }}">{{ $professor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>Tutor:
                            <select class="ui fluid search dropdown" name="tutor" required>
                                <option value="">Tutor</option>
                                @foreach ($tutors as $tutor)
                                    <option @if($tutor->id == $assignment->tutor->id)
                                                selected
                                            @endif value="{{ $tutor->id }}">{{ $tutor->name }}</option>
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
