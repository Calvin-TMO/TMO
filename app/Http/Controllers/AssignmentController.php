<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use DB;

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
        //unsets error session variables
        session()->forget('error');
        session()->forget('status');
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
        //unsets error session variables
        session()->forget('error');

        if (!Auth::user()->hasRole('admin')) {
            return view('access_denied');
        }
        $data = array(
            'errors' => array(),
            'old' => Request(),
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
        //unsets error session variables
        session()->forget('error');

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
            'errors' => array(),
            'old' => Request(),
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
        //check whether duplicates do not exist in the database
        $duplicateCheck = Assignment::where('tutor_id', '=', $request->tutor)->where('student_id', '=', $request->student)->where('course_id', '=', $request->course)->first();
        if ($duplicateCheck != null)
        {
            $errors['duplicate'] = 'This tutor assignment already exists!';
            session()->put('error', $errors['duplicate']);
        }
        //check whether professor matches the course
        $correctProfessorCheck = DB::select('select * from current_professors where user_id = ? and course_id = ?', [$request->professor, $request->course]);
        if ($correctProfessorCheck == null)
        {
            $errors['badProf'] = 'This professor is not currently teaching this course!';
            session()->put('error', $errors['badProf']);
        }
        //check whether tutor matches the course
        $correctTutorCheck = DB::select('select * from available_tutors where user_id = ? and course_id = ?', [$request->tutor, $request->course]);
        if ($correctTutorCheck == null)
        {
            $errors['badTutor'] = 'This tutor is not currently tutoring this course!';
            session()->put('error', $errors['badTutor']);
        }
        if (!empty($errors))
        {
            $data = array(
                'errors' => $errors,
                'old' =>  $request,
                'courses' => Course::all(),
                'tutors' => UserController::getTutors(),
                'students' => UserController::getStudents(),
                'professors' => UserController::getProfessors()
            );
            return view('assignment_add', $data);
        }
        $assignment = new Assignment;
        $assignment->tutor_id = $request->tutor;
        $assignment->student_id = $request->student;
        $assignment->course_id = $request->course;
        $assignment->professor_id = $request->professor;
        $assignment->save();
        session()->put('status', 'Tutor assignment successfully created!');
        return redirect('/assignment/' . $assignment->id);
    }

    /**
     * Update the specified assignment with request info.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update_assignment(Request $request, $assignment_id)
    {
        if (!Auth::user()->hasRole('admin'))
        {
            return view('access_denied');
        }

        $assignment = Assignment::find($request->assignment_id);

        //check whether professor matches the course
        $correctProfessorCheck = DB::select('select * from current_professors where user_id = ? and course_id = ?', [$request->professor, $request->course]);
        if ($correctProfessorCheck == null)
        {
            $errors['badProf'] = 'This professor is not currently teaching this course!';
            session()->put('error', $errors['badProf']);
        }
        //check whether tutor matches the course
        $correctTutorCheck = DB::select('select * from available_tutors where user_id = ? and course_id = ?', [$request->tutor, $request->course]);
        if ($correctTutorCheck == null)
        {
            $errors['badTutor'] = 'This tutor is not currently tutoring this course!';
            session()->put('error', $errors['badTutor']);
        }
        //handles errors by setting $errors array and displaying the value in blade
        if (!empty($errors))
        {
            $data = array(
                'errors' => $errors,
                'old' =>  $request,
                'assignment' => $assignment,
                'courses' => Course::all(),
                'tutors' => UserController::getTutors(),
                'students' => UserController::getStudents(),
                'professors' => UserController::getProfessors()
            );
            return view('assignment_edit', $data);
        }

        $assignment->tutor_id = $request->tutor;
        $assignment->student_id = $request->student;
        $assignment->course_id = $request->course;
        $assignment->professor_id = $request->professor;
        $assignment->save();
        session()->put('status', 'Tutor assignment successfully updated!');
        return redirect('/assignment/' . $assignment->id);
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
    }
}
