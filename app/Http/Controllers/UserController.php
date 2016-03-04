<?php

namespace App\Http\Controllers;

use App\User as User;
use App\Role as Role;
use App\Course as Course;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'users' => User::all()
            );
        return view('users', $data);
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */
    public function create()
    {
        $data = array(
            'roles' => Role::all()
            );
        return view('user_add', $data);
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $check = User::where('email', '=', '$request->email')->first();
        if ($check != null) {
            die("email already used" . $check);
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        $roles = $request->roles;
        if ($roles != null) {
            foreach ($roles as $role_id) {
                DB::table('user_roles')->insert([
                    'user_id' => $user->id,
                    'role_id' => $role_id
                ]);
            }
        }
        return redirect('/user/' . $user->id);
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
            'user' => User::find($id)
            );
        return view('user', $data);
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data = array(
            'user' => User::find($id),
            'roles' => Role::all(),
            'courses' => Course::all()
            );
        return view('user_edit', $data);
    }

    /**
     * Update the specified user in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $roles = $request->roles;
        DB::table('user_roles')->where('user_id', '=', $id)->delete();

        if ($roles != null) {
            foreach ($roles as $role_id) {
                DB::table('user_roles')->insert([
                    'user_id' => $id,
                    'role_id' => $role_id
                ]);
            }
        }
        //$user->save();
        return redirect('/user/' . $id);
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

    public function add_role(Request $request, $id) {
        if ($request->role != 0) {
            DB::table('user_roles')->insert([
                'user_id' => $id,
                'role_id' => $request->role
            ]);
        }
        return redirect('/user/edit/' . $id);
    }

    public function delete_role($user_id, $role_id) {
        DB::table('user_roles')
            ->where([
                ['user_id', '=', $user_id],
                ['role_id', '=', $role_id]
            ])
            ->delete();
        return redirect('/user/edit/' . $user_id);
    }

    public function add_current_professor(Request $request, $id) {
        if ($request->course != 0) {
            DB::table('current_professors')->insert([
                'user_id' => $id,
                'course_id' => $request->course
            ]);
        }
        return redirect('/user/edit/' . $id);
    }

    public function delete_current_professor($user_id, $course_id) {
        DB::table('current_professors')
            ->where([
                ['user_id', '=', $user_id],
                ['course_id', '=', $course_id]
            ])
            ->delete();
        return redirect('/user/edit/' . $user_id);
    }

    public function add_available_tutor(Request $request, $id) {
        if ($request->course != 0) {
            DB::table('available_tutors')->insert([
                'user_id' => $id,
                'course_id' => $request->course
            ]);
        }
        return redirect('/user/edit/' . $id);
    }

    public function delete_available_tutor($user_id, $course_id) {
        DB::table('available_tutors')
            ->where([
                ['user_id', '=', $user_id],
                ['course_id', '=', $course_id]
            ])
            ->delete();
        return redirect('/user/edit/' . $user_id);
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
