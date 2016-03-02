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
                        <div>Role:<br>
                            @foreach ($roles as $role)
                                <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                    @if ($user->hasRole($role->name))
                                        checked
                                    @endif >{{ $role->name }}</option>
                            @endforeach
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
