<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\News;
use App\Campaigns;
class MeController extends Controller
{
    public function show() {
        return view('me');
    }   
    public function logout(Request $request) {
        Session::flush();
        return redirect('/');
    }
    public static function getNews() {
        return News::orderBy('id', 'desc')->take(3)->get();
    }
    public static function getCampaigns() {
        return Campaigns::orderBy('id', 'desc')->take(3)->get();
    }
}