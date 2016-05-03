@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Report</div>
                <div class="panel-body">
                    <form method="POST" action="/report/edit">
                        <label>Tutor Assignment:</label>
                        <div class="ui fluid dropdown-readable" name="assignment" value="{{ $report->assignment_id }}" readonly>
                            {{ $report->assignment->student->name }}:{{ $report->assignment->course->department }}-{{ $report->assignment->course->number }}
                        </div>
                        <div>Session Date:</div>
                        <input type="date" name="session_date" format="yyyy-dd-mm" value="{{ $report->session_date }}" required>

                        <datalist id="time_values">
                            <option value="12:00am"/>
                            <option value="1:00am"/>
                            <option value="2:00am"/>
                            <option value="3:00am"/>
                            <option value="4:00am"/>
                            <option value="5:00am"/>
                            <option value="6:00am"/>
                            <option value="7:00am"/>
                            <option value="8:00am"/>
                            <option value="9:00am"/>
                            <option value="10:00am"/>
                            <option value="11:00am"/>
                            <option value="12:00pm"/>
                            <option value="1:00pm"/>
                            <option value="2:00pm"/>
                            <option value="3:00pm"/>
                            <option value="4:00pm"/>
                            <option value="5:00pm"/>
                            <option value="6:00pm"/>
                            <option value="7:00pm"/>
                            <option value="8:00pm"/>
                            <option value="9:00pm"/>
                            <option value="10:00pm"/>
                            <option value="11:00pm"/>
                        </datalist>

                        <div>Start Time:</div>
                        <input list="time_values" name="session_start" value="{{ date_format(date_create($report->session_start), 'g:ia') }}" required>
                        <div>End Time:</div>
                        <input list="time_values" name="session_end" value="{{ date_format(date_create($report->session_end), 'g:ia') }}" required>
                        <br></br>
                        <label>What we worked on this session:</label>
                        <textarea class="ui fluid stretched" name="topic">{{ $report->topic }}</textarea>
                        <label>How the student is responding:</label>
                        <textarea class="ui fluid stretched" name="response">{{ $report->response }}</textarea>
                        <label>My plans to prepare for next session:</label>
                        <textarea class="ui fluid stretched" name="plans">{{ $report->plans }}</textarea>
                        <label>Student plans to prepare for next session:</label>
                        <textarea class="ui fluid stretched" name="student_plans">{{ $report->student_plans }}</textarea>
                        <label>Comments about how the session went:</label>
                        <textarea class="ui fluid stretched" name="comments">{{ $report->comments }}</textarea>
                        <br></br>
                        <button type="submit" class="ui primary button">Save</button>
                        <input type="hidden" name="report_id" value="{{ $report->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" class="ui button" onclick="location.href='{{ isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ('/report/' . $report->id) }}'">Discard Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
