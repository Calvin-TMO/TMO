@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Assignments</div>

                <div class="panel-body">
                    @foreach ($assignments as $assignment)
                            <li>
                                <div>Course: {{ $assignment->course_id }}
                                </div>
                            </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
