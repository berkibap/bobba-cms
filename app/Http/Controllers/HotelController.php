<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Client;
use \App\User;
class HotelController extends Controller
{
    public function show() {
        $sso = self::GenerateSSO();
        $user = User::where('id', session('id'))->update(array('auth_ticket' => $sso));
        return view('hotel')->with('sso', $sso);
    }
    public function GenerateSSO() {
        $id = session('id');
        $username = session('username');

        $sso = $id . '-BobbaBIZ-' . $username .'-' . md5($username . $id . uniqid());
        return $sso;
    }
}
