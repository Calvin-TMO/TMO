@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User: {{ $user->name }}</div>

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
                                        <form method="POST" action="/user/role/delete">
                                            <input type="hidden" name="role" value="{{ $role->id }}">
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="ui icon button">
                                                <i class="remove icon"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <form class="sublist-add" method="POST" action="/user/role/add">
                            <div class="ui grid">
                                <div class="ten wide column">
                                    <select class="ui fluid dropdown" name="role" required>
                                        <option value="">Select role to add...</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="right floated right aligned four wide column">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="ui button" type="submit">Add Role</button>
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
                                        <form method="POST" action="/course/professor/delete">
                                            <input type="hidden" name="course" value="{{ $course->id }}">
                                            <input type="hidden" name="professor" value="{{ $user->id }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="ui icon button">
                                                <i class="remove icon"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <form class="sublist-add" method="POST" action="/course/professor/add">
                            <div class="ui grid">
                                <div class="ten wide column">
                                    <select class="ui fluid search dropdown" name="course" required>
                                        <option value="">Select course to add...</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->department }}-{{ $course->number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="right floated right aligned four wide column">
                                    <input type="hidden" name="professor" value="{{ $user->id }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="ui button" type="submit">Add Course Taught</button>
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
                                        <form method="POST" action="/course/tutor/delete">
                                            <input type="hidden" name="course" value="{{ $course->id }}">
                                            <input type="hidden" name="tutor" value="{{ $user->id }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="ui icon button">
                                                <i class="remove icon"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <form class="sublist-add" method="POST" action="/course/tutor/add">
                            <div class="ui grid">
                                <div class="ten wide column">
                                    <select class="ui fluid search dropdown" name="course" required>
                                        <option value="">Select course to add...</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->department }}-{{ $course->number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="right floated right aligned four wide column">
                                    <input type="hidden" name="tutor" value="{{ $user->id }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="ui button" type="submit">Add Course Tutored</button>
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
