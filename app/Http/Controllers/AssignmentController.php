<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;

use App\Assignment as Assignment;
use App\User as User;
use App\Course as Course;

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
     * Display a list of all assignments.
     *
     * @return Response
     */
    public function all_assignments()
    {
        $data = array(
            'assignments' => Assignment::all(),
            'tutor_assignments' => Auth::user()->tutor_assignments,
            'professor_assignments' => Auth::user()->professor_assignments
            );
        return view('assignments', $data);
    }

    /**
     * Display a form for creating a new assignment.
     *
     * @return Response
     */
    public function new_assignment()
    {
        if (!Auth::user()->hasRole('admin')) {
            return view('access_denied');
        }

        $data = array(
            'courses' => Course::all(),
            'tutors' => UserController::getTutors(),
            'students' => UserController::getStudents(),
            'professors' => UserController::getProfessors()
        );
        return view('assignment_add', $data);
    }

    /**
     * Display the specified assignment.
     *
     * @param  int  $assignment_id
     * @return Response
     */
    public function view_assignment($assignment_id)
    {
        $user = Auth::user();
        $assignment = Assignment::find($assignment_id);
        if (!$user->hasRole('admin')
            && !($user->hasRole('tutor') && $user->id == $assignment->tutor_id)
            && !($user->hasRole('professor') && $user->id == $assignment->professor_id))
        {
            return view('access_denied');
        }

        $data = array(
            'assignment' => $assignment,
            'reports' => $assignment->reports
            );
        return view('assignment', $data);
    }

    /**
     * Display a form for editing the specified assignment.
     *
     * @param  int  $assignment_id
     * @return Response
     */
    public function edit_assignment($assignment_id)
    {
        if (!Auth::user()->hasRole('admin'))
        {
            return view('access_denied');
        }

        $assignment = Assignment::find($assignment_id);
        $data = array(
            'assignment' => $assignment,
            'courses' => Course::all(),
            'tutors' => UserController::getTutors(),
            'students' => UserController::getStudents(),
            'professors' => UserController::getProfessors()
        );
        return view('assignment_edit', $data);
    }

    /**
     * Save request info as new assignment in database.
     *
     * @param  Request  $request
     * @return Response
     */
    public function add_assignment(Request $request)
    {
        if (!Auth::user()->hasRole('admin'))
        {
            return view('access_denied');
        }

        // TODO: Add check for duplicates.
        $assignment = new Assignment;
        $assignment->tutor_id = $request->tutor;
        $assignment->student_id = $request->student;
        $assignment->course_id = $request->course;
        $assignment->professor_id = $request->professor;
        $assignment->save();

        return redirect('/assignment/' . $assignment->id);
    }

    /**
     * Update the specified assignment with request info.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update_assignment(Request $request)
    {
        if (!Auth::user()->hasRole('admin'))
        {
            return view('access_denied');
        }

        $assignment = Assignment::find($request->assignment_id);
        $assignment->tutor_id = $request->tutor;
        $assignment->student_id = $request->student;
        $assignment->course_id = $request->course;
        $assignment->professor_id = $request->professor;
        $assignment->save();

        return Redirect::back()->with('success', 'Assignment has been updated.');
    }

    /**
     * Remove the specified assignment from storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function delete_assignment(Request $request)
    {
        if (!Auth::user()->hasRole('admin'))
        {
            return view('access_denied');
        }

        //
    }
}
