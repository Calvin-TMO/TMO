@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Reports</div>

                <div class="panel-body">
                    <form action="/reports/create">
                        <input type="submit" value="Create New Report">
                    </form>
                    <p>Coming soon!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
