<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payer;
use DataTables;

class PayerController extends Controller
{
    
    public function getData(Request $request)  {
       if ($request->ajax()) {
            $datas = Payer::all();
            return Datatables::of($datas)->make();
        }        
        return view('products');
  }

  public function about()
  {
    $title = "About";
    $description = "This is about page";

    return view('about', compact('title', 'description'));
  }

}
