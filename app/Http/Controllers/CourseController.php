<?php

namespace App\Http\Controllers;

use App\Course as Course;
use App\Http\Requests;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'courses' => Course::all()
            );
        return view('courses', $data);
    }

    /**
     * Show the form for creating a new course.
     *
     * @return Response
     */
    public function create()
    {
        return view('course_add');
    }

    /**
     * Store a newly created course in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $course = new Course;
        $course->department = $request->department;
        $course->number = $request->number;
        $course->description = $request->description;
        $course->save();
        return redirect('/course/' . Course::where('description', '=', '$request->description')->first()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $data = array(
            'course' => Course::find($id)
            );
        return view('course', $data);
    }

    /**
     * Show the form for editing the specified course.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data = array(
            'course' => Course::find($id)
            );
        return view('course_edit', $data);
    }

    /**
     * Update the specified course in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->department = $request->department;
        $course->number = $request->number;
        $course->description = $request->description;
        $course->save();
        return redirect('/course/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
