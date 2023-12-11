
<?php

use App\Http\Controllers\customerController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('website/index');
});
Route::get('about', function () {
    return view('website/about');
});
Route::get('contact',[contactController::class,'create']);
Route::post('contact',[contactController::class,'store']);

Route::get('service', function () {
    return view('website/service');
});
Route::get('/login',[customerController::class,'login'])->middleware('customerbeforelogin');
Route::post('/login_auth',[customerController::class,'login_auth'])->middleware('customerbeforelogin');

Route::get('/profile',[customerController::class,'profile'])->middleware('customerafterlogin');
Route::get('/profile/{id}',[customerController::class,'edit'])->middleware('customerafterlogin');
Route::post('/profile/{id}',[customerController::class,'update'])->middleware('customerafterlogin');


Route::get('/userlogout',[customerController::class,'logout'])->middleware('customerafterlogin');

Route::get('/signup',[customerController::class,'create'])->middleware('customerbeforelogin');
Route::post('/signup',[customerController::class,'store'])->middleware('customerbeforelogin');

//===================================== admin panel
// Route::group(['middleware'=>['adminafterlogin']],function(){

Route::get('adminlogin',[adminController::class,'index']);
Route::post('/alogin_auth',[adminController::class,'login_auth']);
//});

//Route::group(['middleware'=>['adminbeforelogin']],function(){
Route::get('add_cat', function () {
    return view('admin/add_cat');
});
Route::get('add_emp', function () {
    return view('admin/add_emp');
});
Route::get('add_prod', function () {
    return view('admin/add_prod');
});
Route::get('blank', function () {
    return view('admin/blank');
});
Route::get('dashboard', function () {
    return view('admin/dashboard');
});
Route::get('manage_cat', function () {
    return view('admin/manage_cat');
});
Route::get('manage_cont',[contactController::class,'show']);
Route::get('manage_cont/{id}',[contactController::class,'destroy']);

Route::get('manage_cust',[customerController::class,'show']);
Route::get('manage_cust/{id}',[customerController::class,'destroy']);

Route::get('manage_emp', function () {
    return view('admin/manage_emp');
});
Route::get('manage_feed', function () {
    return view('admin/manage_feed');
});
Route::get('manage_prod', function () {
    return view('admin/manage_prod');
});

Route::get('pnf', function () {
    return view('admin/pnf');
});
//});