@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    <div class="sublist">
                        <div class="sublist-header">Recent Reports</div>
                        <table class="ui sortable selectable celled table">
                            <thead>
                                <tr>
                                    <th class="default-sort desc">Session Date</th>
                                    <th class="">Tutor</th>
                                    <th class="">Student</th>
                                    <th class="">Course</th>
                                    <th class="">Report Topic</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ( $reports as $report )
                                <tr onClick="location.href='/report/{{ $report->id }}'" style="cursor: pointer;">
                                    <td>{{ $report->session_date }}</td>
                                    <td>{{ $report->tutor }}</td>
                                    <td>{{ $report->student }}</td>
                                    <td>{{ $report->department }}-{{ $report->number }}</td>
                                    <td>{{ $report->topic }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="sublist">
                        <div class="sublist-header">Recent Comments</div>
                        <table class="ui sortable selectable celled table">
                            <thead>
                                <tr>
                                    <th class="default-sort desc">Posted Date</th>
                                    <th class="">Commenter</th>
                                    <th class="">Report Topic</th>
                                    <th class="">Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ( $comments as $comment )
                                <tr onClick="location.href='/report/{{ $comment->id }}'" style="cursor: pointer;">
                                    <td>{{ $comment->posted_date }}</td>
                                    <td>{{ $comment->name }}</td>
                                    <td>{{ $comment->topic }}</td>
                                    <td>{{ $comment->comment_text }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
