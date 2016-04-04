@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New User</div>

                <div class="panel-body">
                    <div class="error" @if ($errors) style="display:block" @endif>{{ $errors }}</div>
                    <form method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div>
                            <label class="ui block">Name</label>
                            <div class="ui input">
                                <input type="text"name="name" value="{{ $old_name }}">
                            </div>
                        </div>

                        <div>
                            <label class="ui block">E-Mail Address</label>
                            <div class="ui input">
                                <input type="email" name="email" value="{{ $old_email }}">
                            </div>
                        </div>

                        <div>
                            <label class="ui block">Password</label>
                            <div class="ui input">
                                <input type="password" name="password">
                            </div>
                        </div>

                        <div>
                            <label class="ui block">Confirm Password</label>
                            <div class="ui input">
                                <input type="password" name="password_confirmation">
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="ui button">Save</button>
                            <button type="button" class="ui button" onclick="location.href='/users'">Discard</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
