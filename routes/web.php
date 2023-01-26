<?php

use App\Http\Controllers\PictureController;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    $start = 0;
    $end = 100;
    $interval = 10;

    $range = range(0, 150000, 150000 / 5);
    $range1 = range(0, 150000, 150000 / 2);
    $object_array = [];
    foreach ($range1 as $key => $value) {

        $object_array[] = ['strokeStyle' => '', 'min' => $value, 'max' => next($range1)];
    }
  
    $filtered_array = array_filter($object_array, function ($inner_array) {
        return $inner_array['max'] !== false;
    });
    $i = 0;
    foreach ($filtered_array as &$inner_array) {
        if ($i == 0) {
            $inner_array['strokeStyle'] = "#3e50a6";
        } else {
            $inner_array['strokeStyle'] = "#f27815";
        }
        $i++;
    }
    // dd(json_encode($filtered_array));
    // dd($range,150000/5);
    $data = [
        'range' => $range,
        'strockstyle' => $filtered_array
    ];
    return view('frontend.test', $data);
})->name('home');
Route::get('data', function () {
    return $data = [55, 66, 76, 87];
})->name('getdata');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/project/gallery', function () {
    return view('frontend.photo-gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/photo/inside', function () {
    return view('frontend.photo-inside');
})->name('photo.inside');

Route::get('/project/{id}/detail', function ($id) {
    $data = [
        'project' => DB::table('projects')->where('id', $id)->first()
    ];
    return view('frontend.project_detail', $data);
})->name('project.detail');

Route::post('/contact/store', function (Request $request) {
    // dd($request->all());

    $request->validate(([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ]));
    Mail::to($request->email)->send(new ContactMail($request->name, $request->email, $request->message));

    return redirect()->back()->with('status', 'Email sent successfully');
})->name('contact.store');
