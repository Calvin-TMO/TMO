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
                        <input type="date" name="session_date" format="yyyy-mm-dd" value="{{ date('Y-m-d') }}">

                        <datalist id="time_values">
                            <option value="12:00am"/>
                            <option value="12:30am"/>
                            <option value="1:00am"/>
                            <option value="1:30am"/>
                            <option value="2:00am"/>
                            <option value="2:30am"/>
                            <option value="3:00am"/>
                            <option value="3:30am"/>
                            <option value="4:00am"/>
                            <option value="4:30am"/>
                            <option value="5:00am"/>
                            <option value="5:30am"/>
                            <option value="6:00am"/>
                            <option value="6:30am"/>
                            <option value="7:00am"/>
                            <option value="7:30am"/>
                            <option value="8:00am"/>
                            <option value="8:30am"/>
                            <option value="9:00am"/>
                            <option value="9:30am"/>
                            <option value="10:00am"/>
                            <option value="10:30am"/>
                            <option value="11:00am"/>
                            <option value="11:30am"/>
                            <option value="12:00pm"/>
                            <option value="12:30pm"/>
                            <option value="1:00pm"/>
                            <option value="1:30pm"/>
                            <option value="2:00pm"/>
                            <option value="2:30pm"/>
                            <option value="3:00pm"/>
                            <option value="3:30pm"/>
                            <option value="4:00pm"/>
                            <option value="4:30pm"/>
                            <option value="5:00pm"/>
                            <option value="5:30pm"/>
                            <option value="6:00pm"/>
                            <option value="6:30pm"/>
                            <option value="7:00pm"/>
                            <option value="7:30pm"/>
                            <option value="8:00pm"/>
                            <option value="8:30pm"/>
                            <option value="9:00pm"/>
                            <option value="9:30pm"/>
                            <option value="10:00pm"/>
                            <option value="10:30pm"/>
                            <option value="11:00pm"/>
                            <option value="11:30pm"/>
                        </datalist>

                        <div>Start Time:</div>
                        <input list="time_values" name="session_start">
                        <div>End Time:</div>
                        <input list="time_values" name="session_end">
                        <br></br>
                        <div>What we worked on this session:</div>
                        <textarea class="ui fluid stretched" name="topic"></textarea>
                        <div>How the student is responding:</div>
                        <textarea class="ui fluid stretched" name="response"></textarea>
                        <div>My plans to prepare for next session:</div>
                        <textarea class="ui fluid stretched" name="plans"></textarea>
                        <div>Student plans to prepare for next session:</div>
                        <textarea class="ui fluid stretched" name="student_plans"></textarea>
                        <div>Comments about how the session went:</div>
                        <textarea class="ui fluid stretched" name="comments"></textarea>
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
