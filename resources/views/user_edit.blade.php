@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User: {{ $user->name }}</div>

                <div class="panel-body">
                    <form method="POST">
                        <div>Name: {{ $user->name }}</div>
                        <div>Email: {{ $user->email }}</div>
                        Role:
                        <select name="role">
                            <option value="" @if ($user->role == null) selected @endif ></option>
                            <option value="tutor" @if ($user->role == 'tutor') selected @endif >tutor</option>
                            <option value="professor" @if ($user->role == 'professor') selected @endif >professor</option>
                        </select>
                        <div>Admin: 
                            <input type="checkbox" name="admin" value="yes" @if ($user->admin) checked @endif >
                        </div>
                        <input type="submit" value="Save">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" onclick="location.href='/user/{{ $user->id }}'">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
