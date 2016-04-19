<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use DB;

use App\Role as Role;
use App\Course as Course;

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
     * Display a list of all courses.
     *
     * @return Response
     */
    public function all_courses()
    {
        $data = array(
            'courses' => Course::all()
            );
        return view('courses', $data);
    }

    /**
     * Display a form for creating a new course.
     *
     * @return Response
     */
    public function new_course()
    {
        $data = array(
            'old' => Request()
            );
        return view('course_add', $data);
    }

    /**
     * Display the specified course.
     *
     * @param  int  $course_id
     * @return Response
     */
    public function view_course($course_id)
    {
        $data = array(
            'course' => Course::find($course_id)
            );
        return view('course', $data);
    }

    /**
     * Display a form for editing the specified course.
     *
     * @param  int  $course_id
     * @return Response
     */
    public function edit_course($course_id)
    {
        $data = array(
            'old' => Request(),
            'course' => Course::find($course_id),
            'professors' => Role::where('name', '=', 'professor')->first()->users,
            'tutors' => Role::where('name', '=', 'tutor')->first()->users
            );
        return view('course_edit', $data);
    }

    /**
     * Save request info as new course in database.
     *
     * @param  Request  $request
     * @return Response
     */
    public function add_course(Request $request)
    {
        $check = DB::table('courses')
            ->where('department', '=', '$request->department')
            ->where('number', '=', '$request->number')
            ->first();

        if (!empty($check))
        {
            $data = array(
                'old' => $request,
                );
            session()->put('error', 'Course with department and number already exists.');
            return view('course_add', $data);
        }

        $course = new Course;
        $course->department = $request->department;
        $course->number = $request->number;
        $course->description = $request->description;
        $course->save();

        session()->put('success', 'Course has been added.');
        return redirect('/course/' . $course->id);
    }

    /**
     * Update the specified course with request info.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update_course(Request $request, $course_id)
    {
        $course = Course::find($course_id);

        if ($course->department != $request->department || $course->number != $request->number)
        {
            $duplication_check = DB::table('courses')
                ->where('department', '=', $request->department)
                ->where('number', '=', $request->number)
                ->first();

            if (!empty($duplication_check))
            {
                $data = array(
                    'old' => $request,
                    'course' => Course::find($course_id),
                    'professors' => Role::where('name', '=', 'professor')->first()->users,
                    'tutors' => Role::where('name', '=', 'tutor')->first()->users
                    );
                session()->put('error', 'Course with department and number already exists.');
                return view('course_edit', $data);
            }
        }

        $course->department = $request->department;
        $course->number = $request->number;
        $course->description = $request->description;
        $course->save();

        session()->put('success', 'Course has been updated.');
        return redirect('/course/' . $course_id);
    }

    /**
     * Remove the specified course from storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
