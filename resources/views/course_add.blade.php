@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Course</div>

                <div class="panel-body">
                    <form method="POST">
                        <div>Department: <input type="text" name="department"></div>
                        <div>Course number: <input type="text" name="number"></div>
                        <div>Course Description: <input type="text" name="description"></div>
                        <input type="submit" value="Save">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" onclick="location.href='/courses'">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
