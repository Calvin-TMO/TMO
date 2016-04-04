<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use DB;

class CourseProfessorController extends Controller
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
     * Add the request course to the specifed professor.
     *
     * @param  Request  $request
     * @return Response
     */
    public function add_course_professor(Request $request) {
        if ($request->course != 0 && $request->professor != 0) {
            DB::table('current_professors')->insert([
                'user_id' => $request->professor,
                'course_id' => $request->course
            ]);
        }
        return Redirect::back()->with('success', 'Professor added to course.');
    }

    /**
     * Remove the specified course from the specified professor.
     *
     * @param  Request $request
     * @return Response
     */
    public function delete_course_professor(Request $request) {
        if ($request->course != 0 && $request->professor != 0) {
            DB::table('current_professors')
                ->where([
                    ['user_id', '=', $request->professor],
                    ['course_id', '=', $request->course]
                ])
                ->delete();
        }
        return Redirect::back()->with('success', 'Professor removed from course.');
    }
}
