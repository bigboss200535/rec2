<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   // public function logout()
   //  {
   //      Auth::logout();
   //      Session::flush();
   //      // Optionally, you can redirect the user to a specific page after logout
   //      return redirect('/');

   //  }

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

    public function viewUsers()
    {
       

    }
}
