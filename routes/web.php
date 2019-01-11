
<?php

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


// Route::get('about', function () {
// 	$user = array('Mustansar', 'CEO',10000,'MZSoftech');
//     return $user;
// });
// Route::get('profile', function () {
// 	$user = array('Mustansar', 'CEO',10000,'MZSoftech');
//     return $user;
// });
Route::get('/', function () {

	//$name = "Hello Laravell";
    //return view('welcome')->with("name",$name);
    //return view('welcome')->with(compact('name'));
    //return view('welcome', compact('name'));
    return view('home');
});

Route::get('/signup', function () {

	//$name = "Hello Laravell";
    //return view('welcome')->with("name",$name);
    //return view('welcome')->with(compact('name'));
    //return view('welcome', compact('name'));
    return view('frmSignUp');
});
Route::get('/admin', function () {
	return view('admin');
});
Route::get('/admin_login', function () {
	return view('login');
});
Route::get('admin/add_customer', function () {
	return view('add_customer');
});
Route::post('admin/create_customer', [
    'uses'=> 'customerController@create'
]);
Route::get('admin/add_car', function () {
	return view('add_car');
});
Route::post('admin/create_car', [
    'uses'=> 'carsController@create'
]);
Route::get('admin/add_driver', function () {
	return view('add_driver');
});
Route::post('admin/create_driver', [
    'uses'=> 'driverController@create'
]);
Route::get('/rates', function () {
	return view('rates');
});
Route::get('/contacts',function(){
    return view('contacts');
});
Route::get('/details',function(){
    return view('details');
});
Route::get('/fleet',function(){
    return view('fleet');
});
Route::get('/services',function(){
    return view('services');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/drivers',function(){
    return view('ourdrivers');
});
Route::get('/listusers','homecontroller@ListUser');
Route::post('/createuser','homecontroller@create');