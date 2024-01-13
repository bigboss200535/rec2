<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Payer;
use DataTables;

class PayerController extends Controller
{
    
    public function getAllPayers()
    {
        $payers = DB::table('tax_payer')->get();
        return view('Payer.AddPayer', compact('payers'));
    //     $payers = Payer::all();
    // return view('Payer.AddPayer', compact('tax_payers'));

    }
    

    public function getData(Request $request)  {
       if ($request->ajax()) {
            $datas = Payer::all();
            return Datatables::of($datas)->make();
        }        
        return view('payers');
  }

    public function about()
   {
    $title = "About";
    $description = "This is about page";

    return view('about', compact('title', 'description'));
  }

}
