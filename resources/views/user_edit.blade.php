@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User: {{ $user->name }}</div>

                <div class="panel-body">
                    <table class="ui celled table">
                        <thead>
                            <tr>
                                <th class="">Name</th>
                                <th class="">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <button type="button" class="ui button" onclick="location.href='/user/{{ $user->id }}'">Back</button>
                    <div class="sublist">
                        <div class="sublist-header">Roles:</div>
                        @foreach ($user->roles as $role)
                            <div class="list-item">
                                <div class="ui grid">
                                    <div class="ten wide column">{{ $role->name }}</div>
                                    <div class="right floated right aligned four wide column">
                                        <button type="button" class="ui icon button" onclick="location.href='/user/role/delete/{{ $user->id }}/{{ $role->id }}'">
                                            <i class="remove icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <form class="sublist-add" method="POST" action="/user/role/add/{{ $user->id }}">
                            <div class="ui grid">
                                <div class="ten wide column">
                                    <select class="ui fluid dropdown" name="role">
                                        <option value="">Select role to add...</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="right floated right aligned four wide column">
                                    <button class="ui button" type="submit">Add Role</button>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </div>
                        </form>
                    </div> 
                    @if ($user->hasRole('professor'))
                    <div class="sublist">
                        <div class="sublist-header">Courses Taught:</div>
                        @foreach ($user->courses_taught as $course)
                            <div class="list-item">
                                <div class="ui grid">
                                    <div class="ten wide column">{{ $course->department }}-{{ $course->number }}</div>
                                    <div class="right floated right aligned four wide column">
                                        <button type="button" class="ui icon button" onclick="location.href='/professor/course/delete/{{ $user->id }}/{{ $course->id }}'">
                                            <i class="remove icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <form class="sublist-add" method="POST" action="/professor/course/add/{{ $user->id }}">
                            <div class="ui grid">
                                <div class="ten wide column">
                                    <select class="ui fluid search dropdown" name="course">
                                        <option value="">Select course to add...</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->department }}-{{ $course->number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="right floated right aligned four wide column">
                                    <button class="ui button" type="submit">Add Course Taught</button>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </div>
                        </form>
                    </div>
                    @endif
                    @if ($user->hasRole('tutor'))
                    <div class="sublist">
                        <div class="sublist-header">Courses Tutored:</div>
                        @foreach ($user->courses_tutored as $course)
                            <div class="list-item">
                                <div class="ui grid">
                                    <div class="ten wide column">{{ $course->department }}-{{ $course->number }}</div>
                                    <div class="right floated right aligned four wide column">
                                        <button type="button" class="ui icon button" onclick="location.href='/tutor/course/delete/{{ $user->id }}/{{ $course->id }}'">
                                            <i class="remove icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <form class="sublist-add" method="POST" action="/tutor/course/add/{{ $user->id }}">
                            <div class="ui grid">
                                <div class="ten wide column">
                                    <select class="ui fluid search dropdown" name="course">
                                        <option value="">Select course to add...</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->department }}-{{ $course->number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="right floated right aligned four wide column">
                                    <button class="ui button" type="submit">Add Course Tutored</button>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </div>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.ui.dropdown')
        .dropdown()
    ;
</script>
@endsection
