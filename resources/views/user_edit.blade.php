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
                    <div class="sublist">
                        <div class="sublist-header">Role:</div>
                        @foreach ($user->roles as $role)
                            <div class="list-item">
                                <button type="button" onclick="location.href='/user_role/delete/{{ $user->id }}/{{ $role->id }}'">Remove</button>
                                {{ $role->name }}
                            </div>
                        @endforeach
                        <form class="sublist-add" method="POST" action="/user_role/add/{{ $user->id }}">
                            <select name="role">
                                <option value="">Select role to add...</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="Add New Role">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div> 
                    @if ($user->hasRole('professor'))
                    <div class="sublist">
                        <div class="sublist-header">Courses Taught:</div>
                        @foreach ($user->courses_taught as $course)
                            <div class="list-item">
                                <button type="button" onclick="location.href='/current_professor/delete/{{ $user->id }}/{{ $course->id }}'">Remove</button>
                                {{ $course->department }}{{ $course->number }}
                            </div>
                        @endforeach
                        <form class="sublist-add" method="POST" action="/current_professor/add/{{ $user->id }}">
                            <select name="course">
                                <option value="">Select course to add...</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->department }}{{ $course->number }}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="Add New Course Taught">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                    @endif
                    @if ($user->hasRole('tutor'))
                    <div class="sublist">
                        <div class="sublist-header">Courses Tutored:</div>
                        @foreach ($user->courses_tutored as $course)
                            <div class="list-item">
                                <button type="button" onclick="location.href='/available_tutor/delete/{{ $user->id }}/{{ $course->id }}'">Remove</button>
                                {{ $course->department }}{{ $course->number }}
                            </div>
                        @endforeach
                        <form class="sublist-add" method="POST" action="/available_tutor/add/{{ $user->id }}">
                            <select name="course">
                                <option value="">Select course to add...</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->department }}{{ $course->number }}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="Add New Course Tutored">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                    @endif
                    <button type="button" onclick="location.href='/user/{{ $user->id }}'">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
