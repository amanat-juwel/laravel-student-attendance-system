<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use DB;

use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = DB::table('users')
        ->orderBy('id', 'asc')
        ->skip(1)
        ->take(9999)
        ->get();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/users/manage-users')->with('success','New User Added');
    }



    public function show($id)
    {
        //
    }

    public function edit(Request $request)
    {
        $user = User::find($request->id);

        return view('users.edit',compact('user'))->with('id',$request->id);
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if($request->input('password') != $request->input('confirm_password')){
            return view('users.edit',compact('user'))->with('id',$id);
        }
        elseif($request->input('password') != ''){
            $user->password = bcrypt($request->input('password'));
        }
        $user->update();


        return redirect('users/manage-users')->with('update','User Info Updated');
       
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users/manage-users')->with('delete','User Deleted');
    }


}
