@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Assignment</div>

                <div class="panel-body">
                    <form method="POST">
                        <div>Student:
                            <select class="ui fluid search dropdown" name="student">
                                <option value="">Student</option>
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>Course:
                            <select class="ui fluid search dropdown" name="course">
                                <option value="">Course</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->department }}-{{ $course->number }} {{ $course->description }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>Professor:
                            <select class="ui fluid search dropdown" name="professor">
                                <option value="">Professor</option>
                                @foreach ($professors as $professor)
                                    <option value="{{ $professor->id }}">{{ $professor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>Tutor:
                            <select class="ui fluid search dropdown" name="tutor">
                                <option value="">Tutor</option>
                                @foreach ($tutors as $tutor)
                                    <option value="{{ $tutor->id }}">{{ $tutor->name }}</option>
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
