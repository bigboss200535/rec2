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
        ->where('tax_payer.Archived', 'NO')
        ->where('gender.Differential', '0')
        ->select('tax_payer.*', 'gender.GenderId as GenderId', 'gender.GenderName')
         ->limit(20)
        ->get();

        return view('Payer.AddPayer', compact('payers'));
    }
    

    public function savePayer(Request $request)
     {
        // Validate the form data
        $validatedData = $request->validate([
            'surname' => 'required|min:3|max:50',
            'othername' => 'required|min:3|max:50',
            'gender' => 'required|in:FEMME,HOMME',
            'national_id' => 'required|min:3|max:50',
            'email' => 'required|email',
            'file_number' => 'required|min:3|max:50',
            'voter_id' => 'required|min:3|max:50',
            'telephone_1' => 'required|min:3|max:50',
            'telephone_2' => 'nullable|min:3|max:50',
            'telephone_3' => 'nullable|min:3|max:50',
            'geolocation' => 'max:50',
            'latitude' => 'max:50',
            'longitude' => 'max:50',
            'precision' => 'max:50',
            'altitude' => 'max:50',
            'address' => 'max:255',
            'village' => 'max:100',
            'city' => 'max:100',
            'neighborhood' => 'max:255',
            'municipal' => 'max:255',
            'zone_name' => 'nullable',
        ]);

        // Create a new Payer instance and save it to the database
        $payer = Payer::create($validatedData);

        return response()->json(['message' => 'Payer saved successfully', 'payer' => $payer], 201);
    }

   
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'Firstname' => 'required|string|max:100',
            'Surname' => 'required|string|max:100',
            'GenderId' => 'required|string|max:20',
            'NationalIdNumber' => 'required|string|max:50',
            
        ]);

        // Find the payer by ID
        $payer = Payer::findOrFail($id);

        // Update the payer
        $payer->update($validatedData);

        // Additional logic or response handling can be added here

        return response()->json(['message' => 'Payer updated successfully', 'payer' => $payer]);
    }


    public function about()
   {
    $title = "About";
    $description = "This is about page";

    return view('about', compact('title', 'description'));
  }

}
