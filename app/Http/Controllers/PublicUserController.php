<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class PublicUserController extends Controller
{
    public function showUsers(Request $request){
        $users = User::all();

        return view('public.users.listing',compact('users'));
    }

    public function showUser(Request $request, $userId){
        $users = User::where('id',$userId)->get();

        if($users->isEmpty()){
            abort(404);
        }else{
            $user = $users->first();
            return view('public.users.detailed',compact('user'));
        }
    }

    public function showUserProfile(Request $request){

        $user = $request->user();

        return view('public.users.detailed',compact('user'));
    }

}
