<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function login(Request $request){

        $validated = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);

        if ($validated->fails()) {
            return redirect()->back()->with('success','Password to short');
        }

        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::table('users')->select('email', 'password')->where('email', $email)->get();
        
        if(count($user) == 0){
            return redirect()->back()->with('success','Email not found');
        }
        else if(Hash::check($password, $user->first()->password)){
            session(['role'=> 'user']);
            return redirect('/')->with('success','Logged in');
        };

        return redirect()->back()->with('success','Incorrect password');
    }
    public function logout(Request $request){
        session()->forget('role');
        return redirect()->back()->with('success','Logged out');
    }

    public function register(Request $request){

        $username = $request->input('username');

        $found_usernames = User::where('username', '=', $username)->count();

        if ($found_usernames != 0) {
            return redirect()->back()->with('success','This username already exists');
        }
        $email = $request->input('email');

        $found_emails = User::where('email', '=', $email)->count();

        if ($found_emails != 0) {
            return redirect()->back()->with('success','This email already used');
        }

        $validated = Validator::make($request->all(),[
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8',
            'confirm-new-password'=>'required|min:8|same:password',
        ]);

        if ($validated->fails()) {
            return redirect()->back()->with('success','Please complete the fields correctly');
        }

        $user = new User;
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return redirect()->back()->with('success','User Added Successfully');
    }
}
