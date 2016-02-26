@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    <p>If you see this home page, you are logged in. Here is your user info.</p>
                    <p>{{ Auth::user() }}</p>
                    @foreach (Auth::user()->roles as $role )
                        <p>{{ $role->name }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
