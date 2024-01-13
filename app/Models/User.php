<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // use HasFactory;


public function Logout()
    {
      $userLog = new User();
      $userLog->UserId = '000001/2002';
      $userLog->LogName = 'DEMO';

      // Save the record to the database
      $userLog->save();

      // Return a JSON response
      response()->json(['status' => 'success']);
    }

public function viewUsers(){
     
    }

 public function userLogin(string $username, string $password)
    {
        $user = DB::table('users_accounts')->where('Username', $username)->first();

        if ($user) {
            if ($this->verifyPassword($password, $user->Password, $user->HashSalt)) {
                $this->setLoggedIn($user);
                return true;
            }
        }

        return false;
    }

private function verifyPassword(string $password, string $hashedPassword, string $salt)
    {
        $hashInput = hash('sha256', $salt . $password . $salt);
        return ($hashInput === $hashedPassword);
    }

    private function setLoggedIn($loginUser)
    {
        $loggedIn = rand(10, 100);
        session(['logged_in' => $loggedIn]);
        session(['user' => [
            'username' => $loginUser->Username,
            'fullname' => $loginUser->fullname,
            'email' => $loginUser->Email,
            'user_id' => $loginUser->UserId,
        ]]);
    }

    public function generateApiKey()
    {
        return bin2hex(random_bytes(16));
    }

    public function addUser(array $data)
    {
        $user = DB::table('users')->insert([
            'UserId' => $data['user_id'],
            'Username' => $data['user_name'],
            'Password' => $data['password'],
        ]);

        return $user;
    }










    
}
