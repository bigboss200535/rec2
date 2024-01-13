<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Payer; 
use DataTables;

class PayerController extends Controller
{
    
    public function getAllPayers()
    {
        // fetch all tax_payers which are active and not soft deleted
        $payers = Payer::rightJoin('gender', 'gender.GenderId', '=', 'tax_payer.GenderId')
        ->where('tax_payer.Status', 'ACTIVE')
        ->where('tax_payer.Archived', 'NO')
        ->where('gender.Differential', '0')
        ->select('tax_payer.*', 'gender.GenderId as GenderId', 'gender.GenderName')
        ->get();

        return view('Payer.AddPayer', compact('payers'));


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
