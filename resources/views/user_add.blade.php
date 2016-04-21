@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New User</div>
                <div class="panel-body">
                    <form role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group {{ isset($errors['name']) ? ' has-error' : '' }}">
                            <label class="ui block">Name</label>
                            <div class="ui input">
                                <input type="text"name="name" value="{{ $old->has('name') ? $old->name : '' }}">
                                @if (isset($errors['name']))
                                    <span class="help-block">
                                        <strong>{{ $errors['name'] }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ isset($errors['email']) ? ' has-error' : '' }}">
                            <label class="ui block">E-Mail Address</label>
                            <div class="ui input">
                                <input type="email" name="email" value="{{ $old->has('email') ? $old->email : '' }}">
                                @if (isset($errors['email']))
                                    <span class="help-block">
                                        <strong>{{ $errors['email'] }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ isset($errors['password']) ? ' has-error' : '' }}">
                            <label class="ui block">Password</label>
                            <div class="ui input">
                                <input type="password" name="password">
                                @if (isset($errors['password']))
                                    <span class="help-block">
                                        <strong>{{ $errors['password'] }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ isset($errors['password_confirmation']) ? ' has-error' : '' }}">
                            <label class="ui block">Confirm Password</label>
                            <div class="ui input">
                                <input type="password" name="password_confirmation">
                                @if (isset($errors['password_confirmation']))
                                    <span class="help-block">
                                        <strong>{{ $errors['password_confirmation'] }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="ui button">Save</button>
                            <button type="button" class="ui button" onclick="location.href='{{ isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/users' }}'">Discard</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
