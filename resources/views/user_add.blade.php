@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New User</div>

                <div class="panel-body">
                    <form method="POST">
                        <div class="ui input"><input type="text" placeholder="Name" name="name"></div>
                        <div class="ui input"><input type="text" placeholder="Email" name="email"></div>
                        <br><div class="ui hidden divider"></div><br>
                        <button type="submit" class="ui primary button">Save</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" class="ui button" onclick="location.href='/users'">Discard</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
