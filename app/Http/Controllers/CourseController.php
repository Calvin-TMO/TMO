<?php

namespace App\Http\Controllers;

use DB;
use App\Course as Course;
use App\Role as Role;
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
        $check = Course::where('description', '=', '$request->description')->first();
        if ($check != null) {
            die("description already used" . $check);
        }
        $course = new Course;
        $course->department = $request->department;
        $course->number = $request->number;
        $course->description = $request->description;
        $course->save();
        return redirect('/course/' . $course->id);
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
            'course' => Course::find($id),
            'professors' => Role::where('name', '=', 'professor')->first()->users,
            'tutors' => Role::where('name', '=', 'tutor')->first()->users
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

    public function add_professor(Request $request, $id) {
        if ($request->professor != 0) {
            DB::table('current_professors')->insert([
                'user_id' => $request->professor,
                'course_id' => $id
            ]);
        }
        return redirect('/course/edit/' . $id);
    }

    public function delete_professor($course_id, $professor_id) {
        DB::table('current_professors')
            ->where([
                ['user_id', '=', $professor_id],
                ['course_id', '=', $course_id]
            ])
            ->delete();
        return redirect('/course/edit/' . $course_id);
    }

    public function add_tutor(Request $request, $id) {
        if ($request->tutor != 0) {
            DB::table('available_tutors')->insert([
                'user_id' => $request->tutor,
                'course_id' => $id
            ]);
        }

        return redirect('/course/edit/' . $id);
    }

    public function delete_tutor($course_id, $tutor_id) {
        DB::table('available_tutors')
            ->where([
                ['user_id', '=', $tutor_id],
                ['course_id', '=', $course_id]
            ])
            ->delete();
        return redirect('/course/edit/' . $course_id);
    }
}
