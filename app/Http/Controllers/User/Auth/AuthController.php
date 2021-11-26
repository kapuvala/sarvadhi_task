<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function ViewRegister(){

        return view('user.auth.register');
    }

    public function PostRegister(Request $request){

        $rules = [
            'full_name' => 'required',
            'email' => 'required|email|unique:users,email',
            // 'phone' => 'required|max:10|min:10|unique:users,phone',
            'password' => 'required',
            'company_name' => 'required',
            'company_address' => 'required',
            'gst_number' => 'required',
        ];

        $messages = [
            'full_name.required' => 'Please enter full name.',
            
            'email.required' => 'Please enter email.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'This email all ready taken.',
            
            'password.required' => 'Please enter password.',
            
            'company_name.required' => 'Please enter company name.',
            
            'company_address.required' => 'Please enter company address.',
            
            'gst_number.required' => 'Please enter company GST number.',
        ];

        $this->validate($request, $rules, $messages);

        $requestData = [
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'company_name' => $request->company_name,
            'company_address' => $request->company_address,
            'gst_number' => $request->gst_number
        ];

        User::create($requestData);

        if(Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])){

            return redirect()->route('user.view.dashboard');
        }

        return redirect()->route('user.view.register');
    }

    public function ViewLogin(){

        return view('user.auth.login');
    }

    public function PostLogin(Request $request){
        
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $messages = [
            'email.required' => 'Please enter email.',
            'email.email' => 'Invalid email format.',
            'password.required' => 'Please enter password.',
        ];

        $this->validate($request, $rules, $messages);

        $user_email = User::where('email', $request->email)->first();

        if(!$user_email) return back()->with('invalidEmail', 'User not register.');

        $remember_me = $request->has('remember_me') ? true : false; 
        
        // Check Login
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $remember_me)) {
            
            return redirect()->route('user.view.dashboard');
        }

        return back()->with('invalidPassword', 'Wrong password.');
    }
    
    public function Logout(){
        
        if(!empty(Auth::guard('web')->user())){
            Auth::guard('web')->logout();
        }

        if(!empty(Auth::guard('handicapper')->user())){
            Auth::guard('handicapper')->logout();
        }
        
        return redirect()->route('home');
    }
}
