@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Course: {{ $course->department }}:{{ $course->number }}</div>

                <div class="panel-body">
                    <form method="POST" action="/course/edit/{{ $course->id }}">
                        <div class="form-group">
                            <label class="ui block">Department</label>
                            <div class="ui input">
                                <input type="text" name="department" value="{{ $old->has('department') ? $old->department : $course->department }}" autofocus required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="ui block">Number</label>
                            <div class="ui input">
                                <input type="text" name="number" value="{{ $old->has('number') ? $old->number : $course->number }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="ui block">Description</label>
                            <div class="ui input">
                                <input type="text" name="description" value="{{ $old->has('description') ? $old->description : $course->description }}" required>
                            </div>
                        </div>

                        <button type="submit" class="ui primary button">Save</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="button" class="ui button" onclick="location.href='{{ '/course/' . $course->id }}'">Discard</button>
                    </form>

                    <div class="sublist">
                        <div class="sublist-header">Professors:</div>
                        @foreach ($course->professors as $professor)
                            <div class="list-item">
                                <div class="ui grid">
                                    <div class="ten wide column">{{ $professor->name }}</div>
                                    <div class="right floated right aligned four wide column">
                                        <form method="POST" action="/course/professor/delete">
                                            <input type="hidden" name="course" value="{{ $course->id }}">
                                            <input type="hidden" name="professor" value="{{ $professor->id }}">
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
                                    <select class="ui fluid search dropdown" name="professor" required>
                                        <option value="">Select professor to add...</option>
                                        @foreach ($professors as $professor)
                                            <option value="{{ $professor->id }}">{{ $professor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="right floated right aligned four wide column">
                                    <input type="hidden" name="course" value="{{ $course->id }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="ui button" type="submit">Add Professor</button>
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
                                        <form method="POST" action="/course/tutor/delete">
                                            <input type="hidden" name="course" value="{{ $course->id }}">
                                            <input type="hidden" name="tutor" value="{{ $tutor->id }}">
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
                                    <select class="ui fluid search dropdown" name="tutor" required>
                                        <option value="">Select tutor to add...</option>
                                        @foreach ($tutors as $tutor)
                                            <option value="{{ $tutor->id }}">{{ $tutor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="right floated right aligned four wide column">
                                    <input type="hidden" name="course" value="{{ $course->id }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="ui button" type="submit">Add Tutor</button>
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
