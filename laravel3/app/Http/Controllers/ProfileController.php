<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ProfileController extends Controller
{
    public function locationUpdateUser() {
      return view('/admin.updateUser', ['users' => User::all()]);
    }

    public function updateUser(Request $req) {
      $user = User::find(intval($req->input('name')));
      $user->isAdmin = intval($req->input('isAdmin'));
      $user->save();
      
      return view('/admin.updateUser', ['users' => User::all()]);
    }
}
