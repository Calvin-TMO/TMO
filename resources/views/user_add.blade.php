@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New User</div>

                <div class="panel-body">
                    <form method="POST">
                        <p>Name: <input type="text" name="name"></p>
                        <p>Email: <input type="email" name="email"></p>
                        <p>Role:
                        <select name="role">
                            <option value="" selected></option>
                            <option value="tutor">tutor</option>
                            <option value="professor">professor</option>
                        </select></p>
                        <p><div>Admin: 
                            <input type="checkbox" name="admin" value="yes">
                        </div></p>
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
