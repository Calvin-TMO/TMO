@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Report</div>
                <div class="panel-body">
                    <form method="POST" action="/report/add">
                        <div class="form-group {{ isset($errors['assignment']) ? ' has-error' : '' }}">
                            <label>Tutor Assignment:</label>
                            <select class="ui fluid search dropdown" name="assignment">
                                <option value="">Assignment</option>
                                @foreach ($assignments as $assignment)
                                    <option value="{{ $assignment->id }}" @if ($assignment->id == $old['assignment_id']) selected @endif>
                                        {{ $assignment->student->name }}:{{ $assignment->course->department }}-{{ $assignment->course->number }}
                                    </option>
                                @endforeach
                            </select>
                             @if (isset($errors['assignment']))
                                <span class="help-block">
                                    <strong>{{ $errors['assignment'] }}</strong>
                                </span>
                            @endif
                        </div>
                        <div>Session Date:</div>
                        <input type="date" name="session_date" format="yyyy-mm-dd" value="{{ isset($old['session_date']) ? $old['session_date'] : date('Y-m-d') }}">

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
                        <input list="time_values" name="session_start" value="{{ isset($old['session_start']) ? $old['session_start'] : '' }}">
                        <div>End Time:</div>
                        <input list="time_values" name="session_end" value="{{ isset($old['session_end']) ? $old['session_end'] : '' }}">
                        <br></br>
                        <label>What we worked on this session:</label>
                        <textarea class="ui fluid stretched" name="topic">{{ isset($old['topic']) ? $old['topic'] : '' }}</textarea>
                        <label>How the student is responding:</label>
                        <textarea class="ui fluid stretched" name="response">{{ isset($old['response']) ? $old['response'] : '' }}</textarea>
                        <label>My plans to prepare for next session:</label>
                        <textarea class="ui fluid stretched" name="plans">{{ isset($old['plans']) ? $old['plans'] : '' }}</textarea>
                        <label>Student plans to prepare for next session:</label>
                        <textarea class="ui fluid stretched" name="student_plans">{{ isset($old['student_plans']) ? $old['student_plans'] : '' }}</textarea>
                        <label>Comments about how the session went:</label>
                        <textarea class="ui fluid stretched" name="comments">{{ isset($old['comments']) ? $old['comments'] : '' }}</textarea>
                        <button type="submit" class="ui primary button">Save</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" class="ui button" onclick="location.href='{{ isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/reports' }}'">Discard</button>
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
