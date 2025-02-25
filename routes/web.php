<?php

use Illuminate\Support\Facades\Route;
//1.d
Route::get('/world', function () {
    return 'World';
});

//1.b 
Route::get('/hello', function () {
    return 'Hello World';
}); 

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

Route::get('/', function () {
    return view('welcome');
});
