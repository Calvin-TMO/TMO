@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    <button type="button" class="ui button" onclick="location.href='/user/add'">New User</button>
                    <table class="ui sortable celled table">
                        <thead>
                            <tr>
                                <th class="">Name</th>
                                <th class="">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="selectable"><a href="/user/{{ $user->id }}">{{ $user->name }}</a></td>
                                <td class="selectable"><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                <!-- TODO: add lables of active roles here -->
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.sortable.table')
        .tablesort()
    ;
</script>
@endsection
