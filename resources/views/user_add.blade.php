@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New User</div>

                <div class="panel-body">
                    <form method="POST">
                        <div>Name: <input type="text" name="name"></div>
                        <div>Email: <input type="email" name="email"></div>
                        <div>Role: COMING SOON</div>
                        <input type="submit" value="Save">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" onclick="location.href='/users'">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
