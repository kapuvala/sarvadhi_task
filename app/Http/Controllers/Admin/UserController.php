<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function ViewUsers(){

        $users = User::orderBy('created_at', 'DESC')->get();

        return view('admin.user.list', compact('users'));
    }

    public function ArchiveUsers($user_id){
        User::where('id', $user_id)->delete();

        return redirect()->route('admin.view.users')->with('true', 'User archive successfully');
    }
}
