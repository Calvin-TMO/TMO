@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Courses</div>

                <div class="panel-body">
                    <button type="button" class="ui button" onclick="location.href='/course/add'">New Course</button>
                    <table class="ui sortable selectable celled table">
                        <thead>
                            <tr>
                                <th class="">Department</th>
                                <th class="">Course Number</th>
                                <th class="">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($courses as $course)
                            <tr onclick="location.href='/course/{{ $course->id }}'" style="cursor: pointer;">
                                <td>{{ $course->department }}</td>
                                <td>{{ $course->number }}</td>
                                <td>{{ $course->description }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
