<?php

namespace App\Http\Controllers;

use Redirect;
use App\User as User;
use App\Role as Role;
use App\Course as Course;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
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
     * Display a list of all users.
     *
     * @return Response
     */
    public function all_users()
    {
        $data = array(
            'users' => User::all()
            );
        return view('users', $data);
    }

    /**
     * Display a form for creating a new user.
     *
     * @return Response
     */
    public function new_user()
    {
        $data = array(
            'errors' => '',
            'old_name' => '',
            'old_email' => ''
            );
        return view('user_add', $data);
    }

    /**
     * Save request info as new user in database.
     *
     * @param  Request  $request
     * @return Response
     */
    public function add_user(Request $request)
    {
        $check = User::where('email', '=', $request->email)->first();
        if ($check != null)
        {
            $data = array(
                'errors' => 'This email already has an account associated with it.',
                'old_name' => $request->name,
                'old_email' => $request->email
                );
            return view('user_add', $data);
        }

        if ($request->password != $request->password_confirmation)
        {
            $data = array(
                'errors' => 'Passwords do not match.',
                'old_name' => $request->name,
                'old_email' => $request->email
                );
            return view('user_add', $data);
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/user/' . $user->id);
    }

    /**
     * Display the specified user.
     *
     * @param  int  $user_id
     * @return Response
     */
    public function show_user($user_id)
    {
        $data = array(
            'user' => User::find($user_id)
            );
        return view('user', $data);
    }

    /**
     * Display a form for editing the specified user.
     *
     * @param  int  $user_id
     * @return Response
     */
    public function edit_user($user_id)
    {
        $data = array(
            'user' => User::find($user_id),
            'roles' => Role::all(),
            'courses' => Course::all()
            );
        return view('user_edit', $data);
    }

    /**
     * Updates the specified user with request info.
     *
     * @param  Request  $request
     * @param  int  $user_id
     * @return Response
     */
    public function update_user(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $user->name = $request->name;
        $user->save();

        return redirect('/user/' . $user_id);
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $user_id
     * @return Response
     */
    public function remove_user($user_id)
    {
        //
    }

    /**
     * Add the request role to the specifed user.
     *
     * @param  Request  $request
     * @param  int  $user_id
     * @return Response
     */
    public function add_user_role(Request $request, $user_id) {
        if ($request->role != 0) {
            DB::table('user_roles')->insert([
                'user_id' => $user_id,
                'role_id' => $request->role
            ]);
        }
        return redirect('/user/edit/' . $user_id);
    }

    /**
     * Remove the specified role from the specified user.
     *
     * @param  int  $user_id
     * @param  int  $role_id
     * @return Response
     */
    public function delete_user_role($user_id, $role_id) {
        DB::table('user_roles')
            ->where([
                ['user_id', '=', $user_id],
                ['role_id', '=', $role_id]
            ])
            ->delete();
        return redirect('/user/edit/' . $user_id);
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

    /**
     * Get the list of Tutors.
     *
     * @return Response
     */
    public static function getTutors() {
        return Role::where('name', '=', 'tutor')->first()->users;
    }

    /**
     * Get the list of Students (can include Tutors).
     *
     * @return Response
     */
    public static function getStudents() {
        // Tutors are students too!
        $results = DB::table('users')
            ->join('user_roles', 'users.id', '=', 'user_roles.user_id')
            ->join('roles', 'user_roles.role_id', '=', 'roles.id')
            ->where('roles.name', '=', 'tutor')
            ->select('users.id as id')
            ->get();
        $user_ids = array();
        foreach ($results as $item) {
            array_push($user_ids, $item->id);
        }

        // Normal students
        $results = DB::table('users')
            ->leftJoin('user_roles', 'users.id', '=', 'user_roles.user_id')
            ->whereNull('user_roles.user_id')
            ->select('users.id as id')
            ->get();
        foreach ($results as $item) {
            array_push($user_ids, $item->id);
        }

        return User::find($user_ids);
    }

    /**
     * Get the list of Professors.
     *
     * @return Response
     */
    public static function getProfessors() {
        return Role::where('name', '=', 'professor')->first()->users;
    }
}
