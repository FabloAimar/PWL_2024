<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
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
/*Route::get('/hello', function () { return 'Hello World';
});

Route::get('/world', function () { return 'World';
});

Route::get('/selamat', function () { return 'Selamat Datang';
});

Route::get('/about', function () { return '2141762118';
});

Route::get('/user/{name}', function ($name)
    {return 'Nama saya '.$name;
});

Route::get('/route/{ID}', function ($ID) {
    return 'https://www.polinema.ac.id/' .$ID;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/user/profile', function (){
    //
}) ->name('profile');

Route::get('/articles/{ID}', function ($ID) {
    return 'https://www.polinema.ac.id/' .$ID;
});

Route::middleware(['first', 'second'])->group(function () { Route::get('/', function () {
    // Uses first & second middleware...
});
    
    Route::get('/user/profile', function () {
    // Uses first & second middleware...
});
});
    
    Route::domain('{account}.example.com')->group(function () { Route::get('user/{id}', function ($account, $id) {
    //
});
});
    
    Route::middleware('auth')->group(function () { Route::get('/user', [UserController::class, 'index']); Route::get('/post', [PostController::class, 'index']); Route::get('/event', [EventController::class, 'index']);
    
});

Route::prefix('admin')->group(function () { Route::get('/user', [UserController::class, 'index']); Route::get('/post', [PostController::class, 'index']); Route::get('/event', [EventController::class, 'index']);

});

Route::redirect('/here', '/there');
Route::view('/welcome', 'welcome'); Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
Route::get('/hello', [WelcomeController::class,'hello']);

use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);*/

// Route::('/user/{name?}', function ($name='Fablo') {
//     return 'Nama Saya '.$name;
// });

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/index', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/article/{id}', [PageController::class,'article']);

Route::get('/Home', [HomeController::class, 'index']);
Route::get('/Tentang', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class,'article']);

Route::resource('photos', PhotoController::class);

Route::get('/greeting', [WelcomeController::class, 'greeting']);