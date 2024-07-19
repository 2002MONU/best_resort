<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\ContactDetail;
class LoginController extends Controller
{
    public function login(){
        $footer = ContactDetail::find(1);
        return view('admin.account.login',compact('footer'));
    }

    public function loginPost(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' =>'required|string',
        ]);
        if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' =>$request->input('password')])) {
            $user = auth()->guard('admin')->user();
            return redirect('admin/dashboard')->with('success', 'You are Login in sucessfully.');
        } else {
            return back()->with('error', 'oops! invalid email and password.');
        }
    }

    // change PAssword
    public function changePassword(){
        if(auth()->guard('admin')){
        return view('admin.account.change-password');
        }
        return redirect('admin/login')->with('error','Please Login First');
    }

    public function changePasswordPost(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|same:confirm_password|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);
    
        // Check if the old password is correct
        if (!Hash::check($request->old_password, auth()->guard('admin')->user()->password)) {
            return back()->with('error', "Current password is invalid");
        }
    
        // Check if the new password is the same as the old password
        if ($request->old_password === $request->new_password) {
            return back()->with('error', "New password cannot be the same as your current password.");
        }
    
        // Update the new password
        $admin = auth()->guard('admin')->user();
        $admin->password = Hash::make($request->new_password);
        $admin->save();
    
        return back()->with('success', "Password changed successfully!");
    }
    }
    

