<?php

namespace App\Http\Controllers;

use App\Models\eventRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{

    public function edit_profile()
    {
        $d['my'] = Auth::user();
        return view('users.account_info', $d);
    }

//    public function update_profile(UserUpdate $req)
//    {
//        $user = Auth::user();
//
//        $d = $user->username ? $req->only(['email', 'phone', 'address']) : $req->only(['email', 'phone', 'address', 'username']);
//
//        if(!$user->username && !$req->username && !$req->email){
//            return back()->with('pop_error', __('msg.user_invalid'));
//        }
//
//        $user_type = $user->user_type;
//        $code = $user->code;
//
//        if($req->hasFile('photo')) {
//            $photo = $req->file('photo');
//            $f = Qs::getFileMetaData($photo);
//            $f['name'] = 'photo.' . $f['ext'];
//            $f['path'] = $photo->storeAs(Qs::getUploadPath($user_type).$code, $f['name']);
//            $d['photo'] = asset('storage/' . $f['path']);
//        }
//
//        $this->user->update($user->id, $d);
//        return back()->with('flash_success', __('msg.update_ok'));
//    }

    public function change_pass(Request $req)
    {
        $user_id = Auth::user()->id;
        $my_pass = Auth::user()->password;
        $old_pass = $req->current_password;
        $new_pass = $req->password;

        if(password_verify($old_pass, $my_pass)){
            $data['password'] = Hash::make($new_pass);
            $this->user->update($user_id, $data);
            return back()->with('flash_success', __('msg.p_reset'));
        }

        return back()->with('flash_danger', __('msg.p_reset_fail'));
    }

}
