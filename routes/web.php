
<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Database\Query\IndexHint;
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


// Route::get('/hello', function () {
//     return 'Hello World';
// });


Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2241760036 - Rheznandya Rezky Artha Arya Putra';
});

Route::get('/user/{pentol}', function ($name) { return 'nama saya '.$name;
});


Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

    use Illuminate\Support\Facades\Route as RouteFacade;


Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID " . $id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya pentol '.$name;
});

Route::get('/user/{name?}', function ($name='John') { return 'Nama saya '.$name;
});

