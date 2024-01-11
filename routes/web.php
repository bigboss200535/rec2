<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controller\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// default login page
Route::get('/', function (){
    return view('Login');
});


// view invoices of tax payers
Route::get('/logout', function (){
    return view('User/Logout');
});


// dashboard after login
Route::get('/home', function (){
    return view('Home/Dashboard');
});


Route::get('/Users', function (){
    return view('User/Users');
});

Route::get('/adduser', function (){
    return view('User/RegisterUsers');
});
 
 // add payers 
Route::get('/AddPayer', function (){
    return view('Payer/AddPayer');
});

// view tax payers
Route::get('/viewpayer', function (){
    return view('Payer/ListPayers');
});

// add invoices
Route::get('/addinvoice', function (){
    return view('Invoice/AddInvoice');
});

// view invoices of tax payers
// Route::get('/invoice', function (){
//     return view('Invoice/ViewInvoice');
// });

Route::get('/Invoices', function (){
    return view('Invoice/ViewInvoice');
});
 
Route::get('/RejectInvoices', function (){
    return view('Invoice/RejectedInvoice');
});

Route::get('/CreateInvoice', function (){
    return view('Invoice/CreateInvoice');
});

Route::get('/ModifyInvoice', function (){
    return view('Invoice/ModifyInvoice');
});

Route::get('/SuccessInvoice', function (){
    return view('Invoice/SuccessInvoice');
});


Route::get('/Locatepayer', function (){
    return view('Location/LocatePayer');
});

Route::get('/Payments', function (){
    return view('Monetise/Payments');
});

Route::get('Logout', 'AuthController@logout')->name('Logout');


Route::get('login', [AuthController::class, 'index'])->name('login');

// Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('AddPayer', [CustomerController::class, 'index']);

// Route::get('bill', [AuthController::class, 'logout'])->name('logout');
