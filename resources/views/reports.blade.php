@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All Reports</div>
                <div class="panel-body">
                    <ul class="list">
                        @foreach ($reports as $report)
                            <li><a href="/report/{{ $report->id }}"><div>{{ $report->id }}</div></a></li>
                        @endforeach
                    </ul>
                    <button type="button" onclick="location.href='/report/add'">Create New Report</button>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
