@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Evaluations for Tutors</div>

                <div class="panel-body">
                    <table class="ui sortable celled table">
                        <thead>
                            <tr>
                                <th class="default-sort asc">Name</th>
                                <th class="">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($evals as $evalu)
                            <tr>
                                <td class="selectable"><a href="/eval/{{ $evalu->id }}">{{ $evalu->name }}</a></td>
                                <td>{{ $evalu->email }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
