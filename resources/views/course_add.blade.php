@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Course</div>

                <div class="panel-body">
                    <form method="POST">
                        <div class="form-group">
                            <label class="ui block">Department</label>
                            <div class="ui input">
                                <input type="text" name="department" value="{{ $old->has('department') ? $old->department : '' }}" autofocus required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="ui block">Number</label>
                            <div class="ui input">
                                <input type="text" name="number" value="{{ $old->has('number') ? $old->number : '' }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="ui block">Description</label>
                            <div class="ui input">
                                <input type="text" name="description" value="{{ $old->has('description') ? $old->description : '' }}" required>
                            </div>
                        </div>
                        <button type="submit" class="ui primary button">Save</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" class="ui button" onclick="location.href='{{ isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/courses' }}'">Discard</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

