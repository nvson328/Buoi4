<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Notification;
class ForgotPassword extends Controller
{
    //
    public function form($id){
        $user = User::query()->findOrFail($id);
        // $user = User::query()->where('email', $request->input('email'))->first();
        // dd($user->toArray());
        // dd('abc');
        return view('pwd.formreset',compact('user'));
    }
    /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function resetsuccess(Request $request,$id){
        $newpwd= $request->input('newpassword');
        $repwd= $request->input('renewpassword');
       if($newpwd == $repwd){
            $user = User::query()->findOrFail($id);
            // dd($user->toArray());
            $user->update(['password' => $newpwd]);
            return view('pwd.noti');

       }
       else{
            return view('pwd.formreset');
       }
    }
    public function email(){
        return view('pwd.formemail');
    }
    public function sendemail(Request $request){
        $user = User::query()->where('email', $request->input('email'))->first();
        // dd($user->toArray());
        // dd($request->input('email'));
        if($user->email === $request->input('email')){
            $user ->notify(new VerifyEmail());
            // Mail::to($request->email)->send(new VerifyEmail($user));
            // echo('abc');
            return view('pwd.verifyemail');
        }
        else{
            return view('pwd.formemail');
            // echo('lỗi');
        }

    }

}
