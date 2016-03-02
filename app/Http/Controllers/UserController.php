<?php

namespace App\Http\Controllers;

use App\User as User;
use App\Role as Role;
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
            'roles' => Role::all()
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
}
