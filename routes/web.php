<?php

use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Item;

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

Route::get('/', function () {
    return view('add_customer');
});
Route::get('/items', function () {
    $items = DB::table('item')->get();
    return view('items', ['items' => $items]);
});
Route::get('/additem', function () {
    return view('add_item');
});
Route::get('/customers', function () {
    $customers = DB::table('customer')->get();
    return view('customers', ['customers' => $customers]);
});
Route::get('/addcustomer', function () {
    return view('add_customer');
});

Route::get('/updateitem/{id}', function ($id) {
    $item = Item::where('id', $id)
        ->where('status', 1)
        ->first();
    if ($item) {
        return view('update_item', ['item' => $item]);
    }
});

Route::get('/updatecustomer/{id}', function ($id) {
    $customer = Customer::where('id', $id)
        ->where('status', 1)
        ->first();
    if ($customer) {
        return view('update_customer', ['customer' => $customer]);
    }
});

Route::get('/login', function () {
    if (session()->has('user')) {
        return redirect()->intended('admin');
    }

    $data = [
        'message' => null,
    ];
    return view('login', $data);
})->name('login');

Route::post('/login', 'Auth\LoginController@authenticate');

Route::post('/additem', 'ItemController@store')->name('additem');
Route::post('/addcustomer', 'CustomerController@store')->name('addcustomer');

Route::patch('/updateitem/{id}', 'ItemController@update')->name('updateitem');
Route::patch('/updatecustomer/{id}', 'CustomerController@update')->name('updatecustomer');

Route::delete('/deleteitem/{id}', 'ItemController@destroy')->name('deleteitem');
Route::delete('/deletecustomer/{id}', 'CustomerController@destroy')->name('deletecustomer');
