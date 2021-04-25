<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\User;
use App\UserTokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function dashboard(){
        $userId = Session::get('userId');
        $user = User::where('id', $userId)->first();
        $user->tokenDetails = UserTokens::where('user_id', $userId)->first();
        $user->subscription = Subscription::where('user_id', $userId)->first();
        return view('dashboard.home')->with(['user' => $user]);
    }
}
