<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use DB;

use App\User as User;
use App\Role as Role;
use App\Course as Course;

class UserController extends Controller
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
            'errors' => array(),
            'old' => Request()
            );
        return view('user_add', $data);
    }

    /**
     * Display the specified user.
     *
     * @param  int  $user_id
     * @return Response
     */
    public function view_user($user_id)
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
     * Save request info as new user in database.
     *
     * eparam  Renuest  $request
     * @return Response
     */
    public function add_user(Request $request)
    {
        $errors = array();

        $check = User::where('email', '=', $request->email)->first();
        if ($check != null)
        {
            $errors['email'] = 'Email already exists in database.';
        }

        if ($request->email == "")
        {
            $errors['email'] = 'The email field is required.';
        }

        if ($request->name == "")
        {
            $errors['name'] = 'The name field is required.';
        }

        if ($request->password == "")
        {
            $errors['password'] = 'Both password fields are required.';
        }

        if ($request->password != $request->password_confirmation)
        {
            $errors['password_confirmation'] = 'Passwords do not match.';
        }

        if (!empty($errors))
        {
            $data = array(
                'errors' => $errors,
                'old' => $request
            );
            return view('user_add', $data);
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        
        session()->put('success', 'User successfully created!');
        return redirect('/user/' . $user->id);
    }
    /**
     * Updates the specified user with request info.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update_user(Request $request)
    {
        $user = User::find($request->user_id);
        $user->name = $request->name;
        $user->save();

        return Redirect::back()->with('success', 'User has been updated.');
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function delete_user(Request $request)
    {
        //
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
