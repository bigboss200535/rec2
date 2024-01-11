<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function logout()
    {
        Auth::logout();
        Session::flush();
        // Optionally, you can redirect the user to a specific page after logout
        return redirect('/');
    }
}
