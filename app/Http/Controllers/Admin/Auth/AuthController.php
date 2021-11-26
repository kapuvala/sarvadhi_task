<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function ViewLogin(){
        return view('admin.auth.login');
    }

    public function PostLogin(Request $request){

        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $message = [
            'email.required' => 'Please enter email.',
            'email.email' => 'Invalid email format.',
            'password.required' => 'Please enter password.',
        ];

        $this->validate($request, $rules, $message);

        $admin_email = Admin::where('email', $request->email)->first();

        if(empty($admin_email)) {
            return back()->with('invalidEmail', 'Unknown email.');
        }

        $remember_me = $request->has('remember_me') ? true : false; 
        
        // Check Login
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $remember_me)) {
            
            return redirect()->route('admin.view.dashboard');

        }

        return back()->with('invalidPassword', 'Wrong password.');
    }

    public function Logout(){
        
        Auth::guard('admin')->logout();
        
        return redirect()->route('admin.view.login');
    }
}
