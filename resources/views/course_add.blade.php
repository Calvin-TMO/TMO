@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Course</div>

                <div class="panel-body">
                    <form method="POST">
                        <div class="ui input"><input type="text" placeholder="Department" name="department" autofocus></div>
                        <div class="ui input"><input type="text" placeholder="Course number" name="number"></div>
                        <div class="ui input"><input type="text" placeholder="Course Description" name="description"></div>
                        <br><div class="ui hidden divider"></div><br>
                        <button type="submit" class="ui primary button">Save</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" class="ui button" onclick="location.href='/courses'">Discard</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
