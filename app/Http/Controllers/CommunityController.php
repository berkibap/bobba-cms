<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Campaigns;
use App\UOTW;
use App\User;
use App\Rooms;
use App\Updates;
use DB;
class CommunityController extends Controller
{
    public function show() {
        return view('community/main');
    }
    public function staffs() {
        return view('community/staffs');
    }
    public function news($id = null) {
        if($id !== null) {
            $news = DB::table('news')->where('id', $id)->first();
            return view('community/news')->with('current', $news)->with('user', User::where('id', $news->user_id)->get()->first());
        } else {
            $lastnews = News::orderBy('id', 'desc')->get('id')->first();
            return redirect('/community/news/' . $lastnews->id);
        }
        
    }
    public static function getNews() {
        return News::orderBy('id', 'desc')->take(10)->get();
    }
    public static function getCampaigns() {
        return Campaigns::orderBy('id', 'desc')->take(3)->get();
    }
    public static function getRandomRooms() {
        return Rooms::inRandomOrder()->take(5)->get();
    }
    public static function getUotw() {
        return User::where('id', UOTW::take(1)->get('userid')->first()->userid)->get()->first();
    }
    public static function getUpdates() {
        return Updates::orderBy('id', 'desc')->take(10)->get();
    }
    public static function getStaff($string) {
        $str = explode('-', $string);
        $first = $str[0];
        $last = $str[1];

        return DB::select('select * from users where rank >= ? AND rank <= ?  order by id asc', [$last, $first]);
    }
    public function photos() {
        return view('photos');
    }
    public static function getPhotos($limit = 60) {
        return DB::select('select * from camera_web order by timestamp desc limit ?', [$limit]);
    }
    public function premium() {
        return view('community.premium');
    }
    public function buyPremium(Request $request) {
        $userid = session('id');
        $user = \App\User::where('id', $userid)->get()->first();
        if($user->points >= 115) {
            $user->update(array('rank' => '2', 'points' => $user->points - 115));
            $request->session()->flash('message', 'You\'ve bought premium successfully!');
            return view('community.premium');
        } else {
            $request->session()->flash('error', 'Insufficent diamonds!');
            return view('community.premium');
        }
    }
}
