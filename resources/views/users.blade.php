@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    <ul class="list">
                        @foreach ($users as $user)
                            <li><a href="/user/{{ $user->id }}"><div>{{ $user->name }}</div></a></li>
                        @endforeach
                    </ul>
                    <button type="button" onclick="location.href='/user/add'">New User</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
