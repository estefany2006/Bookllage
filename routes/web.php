<?php

use App\Models\University;
use App\Models\User;
use App\Models\Book;
use App\Models\Inventory;
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
    return view('welcome');
});

Route::get('/', function () {
    return view('bookdescription');
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

Route::get('/home', function () {

    return view('home', [
        'user' => Auth::user(),
    ]);

})->middleware(['auth']);

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->regenerate();
    return redirect('login');
})->middleware(['auth']);

Route::get('/signup', function () {
    return view('signup', [
        'universities' => University::all()
    ]);
})->name('login')->middleware(['guest']);



Route::post('/signup', function () {

    $atributtes = request()->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'support_email' => 'required|email|max:255',
        'university_id' => 'required|exists:universities,id',
        'password' => 'required|string|max:255'
    ]);

    $user = User::create($atributtes);

    if (Auth::login($user)) {
        request()->session()->regenerate();
        return redirect('home');
    }

    return back()->withErrors([
        'email' => 'Account not found'
    ]);
});

Route::get('/registerBook', function () {
    return view('registerBook');
});

Route::post('/registerBook', function () {

    $atributtes = request()->validate([
        'name' => 'required|string|max:255',
        'publisher' => 'required|string|max:255',
        'edition' => 'required|string|max:255',
        'date' => 'required|date',
    ]);


    if($book = Book::create($atributtes))
    {
        return redirect('bookTransaction')-with($book);
    };

    return back()->withErrors([
        'name' => 'Error'
    ]);
});

Route::get('/bookTransaction', function () {
    return view('bookTransaction');
});

