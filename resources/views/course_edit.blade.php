@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Course: {{ $course->description }}</div>

                <div class="panel-body">
                    <form method="POST">
                        <div class="ui input"><input type="text" placeholder="Department" name="department" value="{{ $course->department }}"></div>
                        <div class="ui input"><input type="text" placeholder="Course number" name="number" value="{{ $course->number }}"></div>
                        <div class="ui input"><input type="text" placeholder="Course Description" name="description" value="{{ $course->description }}"></div>
                        <br><div class="ui hidden divider"></div><br>
                        <button type="submit" class="ui primary button">Save</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" class="ui button" onclick="location.href='/course/{{ $course->id }}'">Discard</button>
                    </form>

                    <div class="sublist">
                        <div class="sublist-header">Professors:</div>
                        @foreach ($course->professors as $professor)
                            <div class="list-item">
                                <div class="ui grid">
                                    <div class="ten wide column">{{ $professor->name }}</div>
                                    <div class="right floated right aligned four wide column">
                                        <button type="button" class="ui icon button" onclick="location.href='/course/professor/delete/{{ $course->id }}/{{ $professor->id }}'">
                                            <i class="remove icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <form class="sublist-add" method="POST" action="/course/professor/add/{{ $course->id }}">
                            <div class="ui grid">
                                <div class="ten wide column">
                                    <select class="ui fluid search dropdown" name="professor">
                                        <option value="">Select professor to add...</option>
                                        @foreach ($professors as $professor)
                                            <option value="{{ $professor->id }}">{{ $professor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="right floated right aligned four wide column">
                                    <button class="ui button" type="submit">Add Professor</button>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="sublist">
                        <div class="sublist-header">Tutors:</div>
                        @foreach ($course->tutors as $tutor)
                            <div class="list-item">
                                <div class="ui grid">
                                    <div class="ten wide column">{{ $tutor->name }}</div>
                                    <div class="right floated right aligned four wide column">
                                        <button type="button" class="ui icon button" onclick="location.href='/course/tutor/delete/{{ $course->id }}/{{ $tutor->id }}'">
                                            <i class="remove icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <form class="sublist-add" method="POST" action="/course/tutor/add/{{ $course->id }}">
                            <div class="ui grid">
                                <div class="ten wide column">
                                    <select class="ui fluid search dropdown" name="tutor">
                                        <option value="">Select tutor to add...</option>
                                        @foreach ($tutors as $tutor)
                                            <option value="{{ $tutor->id }}">{{ $tutor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="right floated right aligned four wide column">
                                    <button class="ui button" type="submit">Add Tutor</button>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </div>
                        </form>
                    </div>
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
