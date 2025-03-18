<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
//1.d
Route::get('/world', function () {
    return 'World';
});

//1.b --> 3D
Route::get('/hello', [WelcomeController::class,'hello']); 

//1.f
Route::get('/', function () {
return 'Selamat Datang';
}); 

//1.g
Route::get('/about', function () {
    return 'NIM : 2341760080 
    <br> NAME : Johnatan David Gersom';
});

//2.a
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

//2.d
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

//2.f
Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID " . $id;
});

//3.a
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });
    


/* //--route Name


Route::get('/user/profile', function () {
    //
})->name('profile');

Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');

// Generating URLs...
$url = route('profile');

// Generating Redirects...
return redirect()->route('profile');

//--Route Group dan Route Prefixes
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });

Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});

Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});

//--Route Prefixes
Route::middleware('auth')->group(function () {
	Route::get('/user', [UserController::class, 'index']);
	Route::get('/post', [PostController::class, 'index']);
	Route::get('/event', [EventController::class, 'index']);
	
});

//--Redirect Routes
Route::redirect('/here', '/there');

//-- View Routes
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
 */
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
/* 
Route::get('/', function () {
    return view('welcome');
});

//-- Resource Controller
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
 */
//*-- Membuat VIEW
/* Route::get('/greeting', function () {
    return view('hello', ['name' => 'Johnatan']);
});
 */
//4.c
/* Route::get('/greeting', function () {
	return view('blog.hello', ['name' => 'Avatar']);
}); */

//5.b (menampilkan View dari controller)
Route::get('/greeting', [WelcomeController::class, 'greeting']);
return view('blog.hello', ['name' => 'Andi']);


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes untuk kategori produk
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// Route untuk user dengan parameter
Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

// Route untuk halaman POS (penjualan)
Route::get('/sales', [SalesController::class, 'index']);
