@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Assignment</div>

                <div class="panel-body">
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                              {{ Session::get('error') }}
                        </div>
                    @endif
                    <form method="POST">
                        <div>Student:
                            <select class="ui fluid search dropdown" name="student" required>
                                <option value="">Student</option>
                                @foreach ($students as $student)
                                    @if ($old->has('student'))
                                        <option value="{{ $student->id }}" @if ($student->id == $old->student) selected @endif>{{ $student->name }}</option>
                                    @else
                                        <option value="{{ $student->id }}">{{ $student->name }}</option>
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
                                        <option value="{{ $course->id }}">{{ $course->department }}-{{ $course->number }} {{ $course->description }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div>Professor:
                            <select class="ui fluid search dropdown" name="professor" required>
                                <option value="">Professor</option>
                                @foreach ($professors as $professor)
                                    @if ($old->has('professor'))
                                        <option value="{{ $professor->id }}" @if ($professor->id == $old->professor) selected @endif>{{ $professor->name }}</option>
                                    @else
                                        <option value="{{ $professor->id }}">{{ $professor->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div>Tutor:
                            <select class="ui fluid search dropdown" name="tutor" required>
                                <option value="">Tutor</option>
                                @foreach ($tutors as $tutor)
                                    @if ($old->has('tutor'))
                                        <option value="{{ $tutor->id }}" @if ($tutor->id == $old->tutor) selected @endif>{{ $tutor->name }}</option>
                                    @else
                                        <option value="{{ $tutor->id }}">{{ $tutor->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <br><div class="ui hidden divider"></div><br>
                        <button type="submit" class="ui primary button">Save</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" class="ui button" onclick="location.href='/assignments'">Discard</button>
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
