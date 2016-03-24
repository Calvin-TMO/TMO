@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Report</div>

                <div class="panel-body">
                    <div>Tutor Assignment: {{ $report->assignment_id }}</div>
                    <div>Submission Date: {{ $report->submit_date }}</div>
                    <div>Start Time: {{ $report->session_start }}</div>
                    <div>End Time: {{ $report->session_end }}</div>
                    <div>Topic: {{ $report->topic }}</div>
                    <div>Reponse: {{ $report->response }}</div>
                    <div>Plans: {{ $report->plans }}</div>
                    <div>Student Plans: {{ $report->student_plans }}</div>
                    <div>Comments: {{ $report->comments }}</div>
                    <div class="sublist">
                        <div class="sublist-header">Additional Comments:</div>
                        <table class="ui celled table">
                        <tbody>
                        @foreach ($report->additional_comments as $comment)
                            <tr>
                                <td>{{ $comment->posted_date }}</td>
                                <td>{{ $comment->author->name }}</td>
                                <td>{{ $comment->comment_text }}</td>
			        <td><button type="button" class="ui icon button" onclick="location.href='/report/comment/delete/{{ $report->id }}/{{ $comment->id }}'">
                                            <i class="remove icon"></i>
                                        </button></td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>
                        <form class="sublist-add" method="POST" action="/report/comment/add/{{ $report->id }}">
                            <div class="ui grid">
                                <div class="ten wide column">
                                    <textarea class="ui fluid stretched" name="comment_text"></textarea>
                                </div>
                                <div class="right floated right aligned four wide column">
                                    <button class="ui button" type="submit">Add Comment</button>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </div>
                        </form>
                    </div>

                    <button type="button" class="ui button" onclick="location.href = '/report/edit/{{ $report->id }}';">Edit</button>
                    <button type="button" class="ui button" onclick="location.href = '/reports';">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
