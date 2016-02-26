<?php

namespace App\Http\Controllers;

use App\User as User;
use App\Http\Requests;
use Illuminate\Http\Request;

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
        return view('user_add');
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
        if ($check == null) {
            die("email already used" . $check);
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        if ( isset($request->admin) && $request->admin == 'yes' ) {
            $user->admin = 1;
        } else {
            $user->admin = 0;
        }
        $user->save();
        return redirect('/user/' . User::where('email', '=', '$request->email')->first()->id);
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
            'user' => User::find($id)
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
        $user->role = $request->role;
        if ( isset($request->admin) && $request->admin == 'yes' ) {
            $user->admin = 1;
        } else {
            $user->admin = 0;
        }
        $user->save();
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
