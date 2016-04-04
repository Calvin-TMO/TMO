@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Report</div>
                <div class="panel-body">
                    <form method="POST" action="/report/add">
                        <div>Tutor Assignment: {{ $assignment_id }}
                            <select class="ui fluid search dropdown" name="assignment">
                                <option value="">Assignment</option>
                                @foreach ($assignments as $assignment)
                                    <option value="{{ $assignment->id }}" @if ($assignment->id == $assignment_id) selected @endif>
                                        {{ $assignment->student->name }}:{{ $assignment->course->department }}-{{ $assignment->course->number }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>Session Date:</div>
                        <input type="date" name="submit_date" format="yyyy-mm-dd" value="{{ date('Y-m-d') }}">
                        <div>Start Time:</div>
                        <input type="time" name="session_start">
                        <div>End Time:</div>
                        <input type="time" name="session_end">
                        <div>What we worked on this session:</div>
                        <input type="text" name="topic">
                        <div>How the student is responding:</div>
                        <input type="text" name="response">
                        <div>My plans to prepare for next session:</div>
                        <input type="text" name="plans">
                        <div>Student plans to prepare for next session:</div>
                        <input type="text" name="student_plans">
                        <div>Comments about how the session went:</div>
                        <input type="text" name="comments">
                        <br></br>
                        <button type="submit" class="ui primary button">Save</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" class="ui button" onclick="location.href='/assignment/{{ $assignment_id }}'">Discard</button>
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
