<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
class RegisterController extends Controller
{
    public function show() {
        return view('guest/register');
    }

    public function register(Request $request) {
        $username = $request->input('registerUsername');
        $password = $request->input('registerPassword');
        $password_r = $request->input('registerPasswordRepeat');
        $agb = $request->input('agb');
        $mail = $request->input('registerMail');
        $birthday = $request->input('registerBirthday');
        $month = $request->input('registerBirthmonth');
        $year = $request->input('registerBirthyear');

        if(strlen($username) > 2) {
            if(strlen($password) > 6 && preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', $password)) {
                if($password == $password_r) {
                    if($agb) {
                        if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                            if($year + 13 <= date('Y')) {
                                if(User::where('username', $username)->get()->count() == 0) {
                                    if(User::where('mail', $mail)->get()->count() == 0) {
                                        $array = [
                                            'username' => $username,
                                            'password' => password_hash($password, PASSWORD_DEFAULT),
                                            'mail' => $mail,
                                            'rank' => '1',
                                            'credits' => '5000',
                                            'pixels' => '10000',
                                            'points' => '0',
                                            'motto' => 'Ich bin neu to Bobba!',
                                            'look' => 'lg-275-110.wa-2001-62.ea-1406-62.hd-180-1.sh-908-110.hr-3163-45.ch-3050-1232-1232',
                                            'gender' => 'M',
                                            'online' => '0',
                                            'auth_ticket' => '',
                                            'machine_id' => '',
                                            'ip_register' => $request->ip(),
                                            'ip_current' => $request->ip(),
                                            'home_room' => '0',
                                            'pin' => '0000'
                                        ];
                                        $created = User::create($array);
                                        $request->session()->put('isLoggedIn', true);
                                        foreach($array as $key => $value) {
                                            if($key == 'password') {
                                                continue;
                                            }
                                            session($key, $value);
                                        }
                                        return redirect('/me');
                                    } else {
                                        $request->session()->flash('message', 'This e-mail address already exists!');
                                        return view('guest/register');        
                                    }
                                } else {
                                    $request->session()->flash('message', 'This username already exists!');
                                    return view('guest/register');
                                }
                            } else {
                                $request->session()->flash('message', 'You are not old enough to play this game!');
                                return view('guest/register');
                            }
                        } else {
                            $request->session()->flash('message', 'Invalid e-mail!');
                            return view('guest/register');
                        }
                    } else {
                        $request->session()->flash('message', 'Please accept our TOS.');
                        return view('guest/register');
                    }
                } else {
                    $request->session()->flash('message', 'Your passwords does not match!');
                    return view('guest/register');
                }
            } else {
                $request->session()->flash('message', 'Invalid password!');
                return view('guest/register');
            }
        } else {
            $request->session()->flash('message', 'Invalid username!');
            return view('guest/register');
        }
    }
}
