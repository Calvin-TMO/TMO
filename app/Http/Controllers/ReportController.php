<?php

namespace App\Http\Controllers;

use App\Report as Report;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

class ReportController extends Controller
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
            'reports' => Report::all()
            );
        return view('reports', $data);
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
            'report' => Report::find($id)
            );
        return view('report', $data);
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
            'report' => Report::find($id)
            );
        return view('report_edit', $data);
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
        return redirect('/report/' . $id);
    }

}
