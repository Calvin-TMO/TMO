@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User: {{ $user->name }}</div>

                <div class="panel-body">
                    <div>Name: {{ $user->name }}</div>
                    <div>Email: {{ $user->email }}</div>
                    <div>Roles: @foreach ($user->roles as $role) {{ $role->name }} @endforeach </div>
                    <button type="button" onclick="location.href = '/user/edit/{{ $user->id }}';">Edit</button>
                    <button type="button" onclick="location.href = '/users';">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
