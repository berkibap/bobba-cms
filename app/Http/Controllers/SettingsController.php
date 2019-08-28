<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserSettings;
use App\User;
use Session;
class SettingsController extends Controller
{
    public function show() {
        return view('settings');
    }
    public function updateGeneral(Request $request) {
        $motto = $request->input('motto');
        $requests = $request->input('AllowFriendRequests');
        $trade = $request->input('TRADE');
        UserSettings::where('user_id', $request->session()->get('id'))->update(array('can_trade' => $trade, 'block_friendrequests' => $requests));
        User::where('id', $request->session()->get('id'))->update(array('motto' => $motto));
        Session::put('motto', $motto);

        $request->session()->flash('message', 'Updated!');
        
        return view('settings');
    }
    public function showPassword() {
        return view('settings-password');
    }
    public function updatePassword(Request $request) {
        $oldpassword = $request->input('oldpassword');
        $newpassword = $request->input('newpassword');
        $newpassword_r = $request->input('newpasswordRepeat');
        if(password_verify($oldpassword, User::where('id', session('id'))->get('password')->first()->password)) {
            if($newpassword == $newpassword_r) {
                if(preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', $newpassword)) {
                    User::where('id', session('id'))->update(array('password' => password_hash($newpassword, PASSWORD_DEFAULT)));
                    $request->session()->flash('success', 'Updated your password successfully!');
                    return view('settings-password');
                } else {
                    $request->session()->flash('error', 'Your new password does not match our requirements!');
                    return view('settings-password');
                }
            } else {
                $request->session()->flash('error', 'Your new password does not match your repeated password!');
                return view('settings-password');
            }
        } else {
            $request->session()->flash('error', 'Your current password is not correct!');
            return view('settings-password');
        }
    }
    public function showMail() {
        return view('settings-mail');
    }
    public function updateMail(Request $request) {
        $oldmail = $request->input('oldmail');
        $newmail = $request->input('newmail');
        $newmail_r = $request->input('newmailRepeat');

        if(User::where('mail', $oldmail)->count() >0) {
            if(filter_var($oldmail, FILTER_VALIDATE_EMAIL)) {
                if(filter_var($newmail, FILTER_VALIDATE_EMAIL)) {
                    if(filter_var($newmail_r, FILTER_VALIDATE_EMAIL)) {
                        if($newmail == $newmail_r) {
                            User::where('id', $request->session()->get('id'))->update(array('mail' => $newmail));
                            $request->session()->flash('message', 'Updated your e-mail to '. $newmail . '!');
                            return view('settings-mail');
                        } else {
                            $request->session()->flash('error', 'E-mail addresses do not match!');
                            return view('settings-mail');
                        }
                    } else {
                        $request->session()->flash('error', 'Invalid Repeated E-mail!');
                        return view('settings-mail');
                    }
                } else {
                    $request->session()->flash('error', 'Invalid New E-mail!');
                    return view('settings-mail');
                }
            } else {
                $request->session()->flash('error', 'Invalid Old E-mail!');
                return view('settings-mail');
            }
        } else {
            $request->session()->flash('error', 'Your current e-mail is not correct!');
            return view('settings-mail');
        }
    }
}
