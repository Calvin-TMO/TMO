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
                            @foreach ( $reports as $report )
                                <div class="list-item selectable" onClick="location.href='/report/{{ $report->id }}'">
                                    <div class="ui grid">
                                        <div class="four wide column">{{ $report->session_date }}</div>
                                        <div class="six wide column">{{ $report->name }}</div>
                                        <div class="right floated right aligned four wide column">{{ $report->department }}-{{ $report->number }}</div>
                                    </div>
                                </div>
                            @endforeach
                    </div>
                    <div class="sublist">
                        <div class="sublist-header">Recent Comments</div>
                            @foreach ( $comments as $comment )
                                <div class="list-item selectable" onClick="location.href='/report/{{ $comment->id }}'">
                                    <div class="ui grid">
                                        <div class="four wide column">{{ $comment->session_date }}</div>
                                        <div class="six wide column">{{ $comment->name }}</div>
                                        <div class="right floated right aligned four wide column">{{ $comment->department }}-{{ $comment->number }}</div>
                                    </div>
                                    <p class="comment">{{ $comment->comment_text }}</p>
                                </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
