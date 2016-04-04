<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use DB;

class CourseTutorController extends Controller
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
     * Add the request course to the specifed tutor.
     *
     * @param  Request  $request
     * @return Response
     */
    public function add_course_tutor(Request $request) {
        if ($request->course != 0 && $request->tutor != 0) {
            DB::table('available_tutors')->insert([
                'user_id' => $request->tutor,
                'course_id' => $request->course
            ]);
        }
        return Redirect::back()->with('success', 'Tutor added to course.');
    }

    /**
     * Remove the specified course from the specified tutor.
     *
     * @param  Request $request
     * @return Response
     */
    public function delete_course_tutor(Request $request) {
        if ($request->course != 0 && $request->tutor != 0) {
            DB::table('available_tutors')
                ->where([
                    ['user_id', '=', $request->tutor],
                    ['course_id', '=', $request->course]
                ])
                ->delete();
        }
        return Redirect::back()->with('success', 'Tutor removed from course.');
    }
}
