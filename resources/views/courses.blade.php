@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Courses</div>

                <div class="panel-body">
                    <ul class="list">
                        @foreach ($courses as $course)
		            <li><a href="/course/{{ $course->id }}"><div>{{ $course->department . "-" . $course->number . "    " . $course->description }}</div></a></li>
                        @endforeach
                    </ul>
                    <button type="button" onclick="location.href='/course/add'">New Course</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
