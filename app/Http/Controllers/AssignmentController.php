<?php

namespace App\Http\Controllers;

use App\Assignment as Assignment;
use App\User as User;
use App\Course as Course;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

class AssignmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'assignments' => Assignment::all()
            );
        return view('assignments', $data);
    }

    /**
     * Show the form for creating a new assignment.
     *
     * @return Response
     */
    public function create()
    {
        $data = array(
            'courses' => Course::all(),
            'tutors' => User::all(),
            'students' => User::all(),
            'professors' => User::all()
        );
        return view('assignment_add', $data);
    }

    /**
     * Store a newly created assignment in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $assignment = new Assignment;
        $assignment->tutor_id = $request->tutor;
        $assignment->student_id = $request->student;
        $assignment->course_id = $request->course;
        $assignment->professor_id = $request->professor;
        $assignment->save();
        $roles = $request->roles;
        if ($roles != null) {
            foreach ($roles as $role_id) {
                DB::table('assignment_roles')->insert([
                    'assignment_id' => $assignment->id,
                    'role_id' => $role_id
                ]);
            }
        }
        return redirect('/assignment/' . $assignment->id);
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
            'assignment' => Assignment::find($id)
            );
        return view('assignment', $data);
    }

    /**
     * Show the form for editing the specified assignment.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data = array(
            'assignment' => Assignment::find($id),
            'courses' => Course::all(),
            'tutors' => User::all(),
            'students' => User::all(),
            'professors' => User::all()
        );
        return view('assignment_edit', $data);
    }

    /**
     * Update the specified assignment in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $assignment = Assignment::find($id);
        $assignment->tutor_id = $request->tutor;
        $assignment->student_id = $request->student;
        $assignment->course_id = $request->course;
        $assignment->professor_id = $request->professor;
        $assignment->save();
        return redirect('/assignment/' . $id);
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
