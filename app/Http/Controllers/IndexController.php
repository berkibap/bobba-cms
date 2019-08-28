<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
class IndexController extends Controller
{
    public function show() {
        return view('guest/login');
    }
    public function login(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');
        $user = User::where('username', $username)->first();
        if($user) {
            if(password_verify($password, $user->password)) {
                $request->session()->put('id', $user->id);
                $request->session()->put('username', $user->username);
                $request->session()->put('rank', $user->rank);
                $request->session()->put('mail', $user->mail);
                $request->session()->put('motto', $user->motto);
                $request->session()->put('login', true);
                return redirect('/me');
            } else {
                $request->session()->flash('message', 'Invalid password!');
                return view('guest/login');
            }
        } else {
            $request->session()->flash('message', 'User not found!');
            return view('guest/login');
        }
    }
}
