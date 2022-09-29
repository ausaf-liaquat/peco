<?php

use App\Http\Controllers\PictureController;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
    return view('frontend.index');
})->name('home');
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/photo-gallery', function () {
    return view('frontend.photo-gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/photo/inside', function () {
    return view('frontend.photo-inside');
})->name('photo.inside');

Route::post('/contact/store', function (Request $request)
{
    // dd($request->all());

    $request->validate(([
        'name'=>'required',
        'email'=>'required|email',
        'message'=>'required'
    ]));
    Mail::to($request->email)->send(new ContactMail($request->name,$request->email,$request->message));

    return redirect()->back()->with('status','Email sent successfully');
})->name('contact.store');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

// Route::middleware('auth')->group(function () {
//     // Route::view('about', 'about')->name('about');

//     Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

//     Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
//     Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

//     Route::get('pictures',[PictureController::class,'index'])->name('picture.index');
//     Route::get('pictures/create',[PictureController::class,'create'])->name('picture.create');
//     Route::post('pictures/store',[PictureController::class,'store'])->name('picture.store');
//     Route::get('pictures/{picture}/edit',[PictureController::class,'edit'])->name('picture.edit');
//     Route::get('pictures/{picture}/edit',[PictureController::class,'update'])->name('picture.update');
// });
