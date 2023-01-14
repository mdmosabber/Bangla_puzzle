<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
       $users = User::orderBy('id', 'desc')->paginate(20);
       return view('admin.user.user',compact('users'));
    }

    public function dashboard(){
        $user = User::where('id',Auth::user()->id)->first();
        return view('user/dashboard',compact('user'));
    }


}
