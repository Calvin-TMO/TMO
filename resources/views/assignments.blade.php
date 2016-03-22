@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Assignments</div>

                <div class="panel-body">
                    <table class="ui sortable selectable celled table">
                        <thead>
                            <tr>
                                <th class="">Tutor</th>
                                <th class="">Student</th>
                                <th class="">Course</th>
                                <th class="">Professor</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($assignments as $assignment)
                            <tr class="clickable-row" data-href="/assignment/{{ $assignment->id }}">
                                <td>{{ $assignment->tutor->name }}</td>
                                <td>{{ $assignment->student->name }}</td>
                                <td>{{ $assignment->course->department }}-{{ $assignment->course->number }} {{ $assignment->course->description }}</td>
                                <td>{{ $assignment->professor->name }}</td>
                            </a></tr>
                        @endforeach
                        </tbody>
                    </table>
                    <button class="ui button" onclick="location.href='/assignment/add'">New Assignment</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
    $('.sortable.table')
        .tablesort()
    ;
});
</script>
@endsection
