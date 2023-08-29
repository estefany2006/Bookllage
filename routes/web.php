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

Route::redirect('home', '/categories');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', function () {

    return view('categories', [
        'user' => Auth::user(),
    ]);

})->middleware(['auth']);


Route::get('/bookdescription', function () {
    return view('bookdescription');
});

Route::get('/login', function () {
    return view('loginSignup');
})->name('login')->middleware(['guest']);

Route::post('/login', function () {
    $atributes = request()->validate([
        'login_email' => 'required|email|max:255',
        'login_password' => 'required|string|max:255'
    ]);

    if (Auth::attempt(['email' => $atributes['login_email'], 'password' => $atributes['login_password']])) {
        request()->session()->regenerate();
        return redirect('categories');
    }

    return back()->withErrors([
        'email' => 'Account not found'

    ]);

});


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
        return redirect('categories');
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

Route::get('/categories', function () {
    return view('categories');
});


Route::get('/medicine', function () {
    return view('medicine', [
        'inventory' => Inventory::where('available', true)->get()
    ]);
});

Route::get('/computerEngineering', function () {
    return view('computerEngineering');
});

Route::get('/psychology', function () {
    return view('psychology');
});

Route::get('/economic', function () {
    return view('economic');
});

Route::get('/english', function () {
    return view('english');
});

Route::get('/marketing', function () {
    return view('marketing');
});

Route::get('/email', function () {
    return view('email');
});
