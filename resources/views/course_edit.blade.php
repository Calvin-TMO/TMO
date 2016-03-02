@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Course: {{ $course->description }}</div>

                <div class="panel-body">
                    <form method="POST">
                        <div>Department: <input type="text" name="department" value="{{ $course->department }}"></div>
                        <div>Course number: <input type="text" name="number" value="{{ $course->number }}"></div>
                        <div>Course description: <input type="text" name="description" value="{{ $course->description }}"></div> 
                        <input type="submit" value="Save">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" onclick="location.href='/course/{{ $course->id }}'">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
