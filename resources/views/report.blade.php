@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Report</div>

                <div class="panel-body">
                    <h2>{{ $report->assignment->student->name }} : {{ $report->assignment->course->department }}-{{ $report->assignment->course->number }}</h2>
                    <div>Session Date: {{ date_format(date_create($report->session_date), 'm/d/Y') }}</div>
                    <div>Start Time: {{ date_format(date_create($report->session_start), 'g:ia') }}</div>
                    <div>End Time: {{ date_format(date_create($report->session_end), 'g:ia') }}</div>
                    <br></br>
                    <label>What we worked on this session:</label>
                    <div class="ui fluid textarea stretched" readonly>{{ $report->topic }}</div>
                    <label>How the student is responding:</label>
                    <div class="ui fluid textarea stretched" readonly>{{ $report->response }}</div>
                    <label>My plans to prepare for next session:</label>
                    <div class="ui fluid textarea stretched" readonly>{{ $report->plans }}</div>
                    <label>Student plans to prepare for next session:</label>
                    <div class="ui fluid textarea stretched" readonly>{{ $report->student_plans }}</div>
                    <label>Comments about how the session went:</label>
                    <div class="ui fluid textarea stretched" readonly>{{ $report->comments }}</div>

                    <button type="button" class="ui button" onclick="location.href = '/report/edit/{{ $report->id }}';">Edit</button>
                    <button type="button" class="ui button" onclick="location.href = '/reports';">Back</button>

                    <div class="sublist">
                        <div class="sublist-header">Additional Comments:</div>
                        <table class="ui celled table">
                        <tbody>
                        @foreach ($report->additional_comments as $comment)
                            <tr>
                                <td>{{ $comment->posted_date }}</td>
                                <td class="selectable"><a href="/user/{{ $comment->author->id }}">{{ $comment->author->name }}</a></td>
                                <td>{{ $comment->comment_text }}</td>
			        <td>
                                    <form method="POST" action="/report/comment/delete">
                                        <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="ui icon button">
                                            <i class="remove icon"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>
                        <form class="sublist-add" method="POST" action="/report/comment/add">
                            <div class="ui grid">
                                <div class="ten wide column">
                                    <textarea class="ui fluid stretched" name="comment_text" required></textarea>
                                </div>
                                <div class="right floated right aligned four wide column">
                                    <input type="hidden" name="report_id" value="{{ $report->id }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="ui button" type="submit">Add Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
