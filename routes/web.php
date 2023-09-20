<?php

use App\Models\Category;
use App\Models\Department;
use App\Models\District;
use App\Models\Municipality;
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
    $atributtes = request()->validate([
        'login_email' => 'required|email|max:255',
        'login_password' => 'required|string|max:255'
    ]);

    if (Auth::attempt(['email' => $atributtes['login_email'], 'password' => $atributtes['login_password']])) {
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
    return view('loginSignup', [
        'universities' => University::all()
    ]);
})->name('login')->middleware(['guest']);

Route::post('/signup', function () {

    $atributtes = request()->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'student_id' => 'required|string|max:15',
        'university_id' => 'required|exists:universities,id',
        'email' => 'required|email|max:255',
        'support_email' => 'required|email|max:255',
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
    return view('registerBook', [
        'categories' => Category::all(),
        'books' => Book::all(),
    ]);
});

Route::post('/registerBook', function () {

    $atributtes = request()->validate([
        'name' => 'required|string|max:255',
        'publisher' => 'required|string|max:255',
        'edition' => 'required|string|max:255',
        'date' => 'required|date',
        'category_id' => 'required'
    ]);

    if ($book = Book::create($atributtes)) {
        return redirect('bookTransaction')->with('book', $book);
    };

    return back()->withErrors([
        'name' => 'Error'
    ]);
});

Route::get('/bookTransaction/{book}', function (Book $book) {
    return view('bookTransaction', [
        'book' =>  $book,
        'departments' =>  Department::all(),
        'municipalities' =>  Municipality::all(),
        'districts' =>  District::all()
    ]);
});

Route::get('/categories', function () {
    return view('categories');
})->name('login')->middleware(['auth']);


Route::get('/medicine', function () {
    return view('medicine', [
        'inventoryItems' => Inventory::where('available', true)->get()
    ]);
});

Route::get('/computerEngineering', function () {
    return view('computerEngineering', [
        'inventoryItems' => Inventory::where('available', true)->get()
    ]);
});

Route::get('/psychology', function () {
    return view('psychology', [
        'inventoryItems' => Inventory::where('available', true)->get()
    ]);
});

Route::get('/economic', function () {
    return view('economic', [
        'inventoryItems' => Inventory::where('available', true)->get()
    ]);
});

Route::get('/english', function () {
    return view('english', [
        'inventoryItems' => Inventory::where('available', true)->get()
    ]);
});

Route::get('/marketing', function () {
    return view('marketing', [
        'inventoryItems' => Inventory::where('available', true)->get()
    ]);
});

Route::get('/email', function () {
    return view('email');
});

Route::get('/email', function () {
    return view('email');
});

Route::get('/perfil', function () {
    return view('perfil');
});


