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
                    @if ($user->roles()->first())
                        <div class="sublist">
                            <div class="sublist-header">Roles:</div>
                            @foreach ($user->roles as $role)
                                <div class="list-item">{{ $role->name }}</div>
                            @endforeach
                        </div>
                    @endif
                    @if ($user->hasRole('professor'))
                        <div class="sublist">
                            <div class="sublist-header">Courses Teaching:</div>
                            @foreach ($user->courses_taught as $course)
                                <div class="list-item">{{ $course->department }}{{ $course->number }}</div>
                            @endforeach
                        </div>
                    @endif
                    @if ($user->hasRole('tutor'))
                        <div class="sublist">
                            <div class="sublist-header">Courses Tutoring:</div>
                            @foreach ($user->courses_tutored as $course)
                                <div class="list-item">{{ $course->department }}{{ $course->number }}</div>
                            @endforeach
                        </div>
                    @endif
                    <button type="button" onclick="location.href = '/user/edit/{{ $user->id }}';">Edit</button>
                    <button type="button" onclick="location.href = '/users';">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
