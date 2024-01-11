<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersAuthController extends Controller
{
  public function Logout()
    {
        // Auth::logout();

      // $request->session()->invalidate();
      // $request->session()->regenerateToken();
      // $user = DB::table('users_accounts')->where('Username', $username)->first();

      $userLog = new User();
      $userLog->UserId = '000001/2002';
      $userLog->LogName = 'DEMO';

    // Save the record to the database
      $userLog->save();

    // Return a JSON response
    return response()->json(['status' => 'success']);

    }
}
