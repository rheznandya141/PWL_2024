<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\POSHomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
//Pertemuan2 - Praktikum1
/* Route::get('/hello', function () {
    return 'Hello World';
}); */
/* Route::get('/world', function () {
    return 'World';
}); */
/* Route::get('/', function () {
    return 'Selamat Datang';
}); */
/* Route::get('/about', function () {
    return '555556';
}); */
/* Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
}); */
/* Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
}); */
/* Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
}); */
/* Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
}); */
/* Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
}); */
/* Route::get('/user/profile', function () {
    //
   })->name('profile');
Route::get(
'/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');
// Generating URLs...
$url = route('profile');
// Generating Redirects...
return redirect()->route('profile'); */
//Pertemuan2 - Praktikum2
Route::get("/hello", [WelcomeController::class,"hello"]);
/*
Route::get('/', [PageController::class,"index"]);
Route::get('/about', [PageController::class,"about"]);
Route::get('/articles/{id}', [PageController::class,"articles"]);
 */

    //Langkah 7

Route::get('/', [POSHomeController::class,"index"]);
// Route::get('/', [HomeController::class,"index"]);
Route::get('/about', [AboutController::class,"about"]);
Route::get('/articles/{id}', [ArticleController::class,"articles"]);


use App\Http\Controllers\PhotoController;

use App\Http\Controllers\POSProductsController;
use App\Http\Controllers\POSSalesController;
use App\Http\Controllers\POSUserProfileController;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
//Pertemuan2 - Praktikum3
/* Route::get('/greeting', function () {
    return view('hello', ['name' => 'Rakha']);
}); */
/* Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Rakha']);
});
 */

Route::get('/greeting', [WelcomeController::class, 
'greeting']);


//Pertemuan2 - Soal Praktikum

Route::get('/', [POSHomeController::class, 'home']);

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [POSProductsController::class, 'foodBeverage']);
    Route::get('/beauty-health', [POSProductsController::class, 'beautyHealth']);
    Route::get('/home-care', [POSProductsController::class, 'homeCare']);
    Route::get('/baby-kid', [POSProductsController::class, 'babyKid']);
});

Route::get('/user/{i44}/pentol/{pentol}', [POSUserProfileController::class, 'user']);

Route::get('/sales', [POSSalesController::class, 'sales']);