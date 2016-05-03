<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use DB;

class UserRoleController extends Controller
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
     * Save the request role to the specifed user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function add_user_role(Request $request) {
        if ($request->role != 0 && $request->user_id != 0) {
            DB::table('user_roles')->insert([
                'user_id' => $request->user_id,
                'role_id' => $request->role
            ]);
        }
        return Redirect::back()->with('success', 'Role has been added to user.');
    }

    /**
     * Remove the specified role from the specified user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function delete_user_role(Request $request) {
        if ($request->role != 0 && $request->user_id != 0) {
            DB::table('user_roles')
                ->where([
                    ['user_id', '=', $request->user_id],
                    ['role_id', '=', $request->role]
                ])
                ->delete();
            if ($request->role == 1) {  // Tutor
                DB::table('available_tutors')
                    ->where([
                        ['user_id', '=', $request->user_id]
                    ])
                    ->delete();
            }
            if ($request->role == 2) {  // Professor
                DB::table('current_professors')
                    ->where([
                        ['user_id', '=', $request->user_id]
                    ])
                    ->delete();
            }

        }
        return Redirect::back()->with('success', 'Role has been removed from user.');
    }
}
