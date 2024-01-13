<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayerController extends Controller
{
     public function home()
  {
    $developer = "Home";
    $description = "This is home page";

    return view('AddPayer', compact('title', 'description'));
  }

  public function about()
  {
    $title = "About";
    $description = "This is about page";

    return view('about', compact('title', 'description'));
  }

}
