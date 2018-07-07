<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegistrationsController extends Controller
{
    public function create()
    {
      return view('sessions.create');
    }

    public function store()
    {
      //Validate user input
      $this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed'
      ]);

      //Create and save the user
      $user = User::create([
      'name' => request('name'),
      'email' => request('email'),
      'password' => bcrypt(request('password'))
      ]);
      // Sign them in
      auth()->login($user);


      //redirect back
      return redirect('/');
    }
}
