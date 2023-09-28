<?php

use App\Models\Category;
use App\Models\Department;
use App\Models\District;
use App\Models\Municipality;
use App\Models\University;
use App\Models\User;
use App\Models\Book;
use App\Models\Inventory;
use Illuminate\Support\Facades\Auth;
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


Route::get('/bookdescription/{inventory}', function (Inventory $inventory) {
    return view('bookdescription', [
        'inventory' => $inventory,
    ]);
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
        return redirect("bookTransaction/$book->id");
    };

    return back()->withErrors([
        'name' => 'Error'
    ]);
});

Route::get('/bookTransaction/{book}', function (Book $book) {
    return view('bookTransaction', [
        'book' =>  $book,
        'user_id' => Auth::user()->id,
        'departments' =>  json_encode(Department::all()),
        'municipalities' =>  json_encode(Municipality::all()),
        'districts' =>  json_encode(District::all())
    ]);
});

Route::post('/bookTransaction', function () {
    $attributes = request()->validate([
        'user_id' => 'required|exists:users,id',
        'book_id' => 'required|exists:books,id',
        'address' => 'required',
        'district_id' => 'required|exists:districts,id',
        'municipality_id' => 'required|exists:municipality,id',
        'department_id' => 'required|exists:department,id',
        'price' => 'required',
        'description' => 'required',
    ]);

    $inventory = Inventory::create([...$attributes, 'available' => true]);
    if ($inventory) {
        return redirect("bookdescription/$inventory->id");
    };

    return back()->withErrors([
        'name' => 'Error'
    ]);
});

Route::get('/categories', function () {
    return view('categories');
})->name('login')->middleware(['auth']);


Route::get('/medicine', function () {
    $categoryID = Category::firstWhere('name', 'Medicine')->id;
    return view('medicine', [
        'inventoryItems' => Inventory::where('available', true)->whereRelation('book', 'category_id', $categoryID)->get()
    ]);
});

Route::get('/computerEngineering', function () {
    $categoryID = Category::firstWhere('name', 'Computer Engineering')->id;
    return view('computerEngineering', [
        'inventoryItems' => Inventory::where('available', true)->whereRelation('book', 'category_id', $categoryID)->get()
    ]);
});

Route::get('/psychology', function () {
    $categoryID = Category::firstWhere('name', 'Psychology')->id;
    return view('psychology', [
        'inventoryItems' => Inventory::where('available', true)->whereRelation('book', 'category_id', $categoryID)->get()
    ]);
});

Route::get('/economic', function () {
    $categoryID = Category::firstWhere('name', 'Economic')->id;
    return view('economic', [
        'inventoryItems' => Inventory::where('available', true)->whereRelation('book', 'category_id', $categoryID)->get()
    ]);
});

Route::get('/english', function () {
    $categoryID = Category::firstWhere('name', 'English')->id;
    return view('english', [
        'inventoryItems' => Inventory::where('available', true)->whereRelation('book', 'category_id', $categoryID)->get()
    ]);
});

Route::get('/marketing', function () {
    $categoryID = Category::firstWhere('name', 'Communications')->id;
    return view('marketing', [
        'inventoryItems' => Inventory::where('available', true)->whereRelation('book', 'category_id', $categoryID)->get()
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


