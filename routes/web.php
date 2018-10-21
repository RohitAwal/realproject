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


Route::get('/','HomeController@index');
Route::get('/contactus',function (){
    return view('contactus');
});
Route::get('/aboutus',function (){
    return view('aboutus');
});
Route::get('/help',function (){
    return view('help');
});

Route::post('/send/email',function (\Illuminate\Http\Request $request){
    \App\ContactUs::create($request->all());
    return redirect()->back();
});


Auth::routes();

Route::group(['middleware'=>'auth'],function (){
    Route::get('/home', function (){
        return redirect()->route('dashboard');
    })->name('home');

    Route::get('admin/home', 'Admin\DashboardController@index')->name('dashboard');

    Route::resource('product','Admin\ProductController');
});
Route::resource('order','Admin\OrderController');
Route::resource('comment','Admin\CommentController');

