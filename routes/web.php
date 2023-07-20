<?php

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
    return view('login');
});


Route::get('/login', function () {




    return view('login');

})->name('login')->middleware(['guest']);




Route::post('/login', function () {

    $atributes = request()->validate([

        'email' => 'required|email|max:255',

        'password' => 'required|string|max:255'

    ]);




    if (Auth::attempt($atributes)) {

        request()->session()->regenerate();




        return redirect('home');

    }




    return back()->withErrors([

        'email' => 'Account not found'

    ]);

});




Route::get('home', function (){

    return view('dashboard', [

        'user' => Auth::user(),

        'subjects' => Subject::all()

    ]);

})->middleware(['auth']);




Route::post('logout', function (){

    Auth::logout();

    request()->session()->regenerate();

    return redirect('login');

});

