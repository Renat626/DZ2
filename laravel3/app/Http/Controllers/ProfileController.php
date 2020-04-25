<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\ViewErrorBag;
use Auth;

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

    public function locationProfile() {
      if (is_object(Auth::user())) {
        return view('/profile.profile', ['userName' => Auth::user()->name,
        'userEmail' => Auth::user()->email,
        'userAvatar' => Auth::user()->avatar]);
      } else {
        return view('/auth.register');
      }
    }

    public function updateProfile(Request $req) {
      $user = User::find(Auth::user()->id);
      $this->validate($req, User::rules(), [], User::attributeProfile()); // Закоментировать, чтобы отправка данных сработала.
      $user->name = $req->input('userName');
      $user->email = $req->input('userEmail');
      $user->save();

      return view('/profile.profile', ['userName' => Auth::user()->name,
      'userEmail' => Auth::user()->email]);
    }
}
