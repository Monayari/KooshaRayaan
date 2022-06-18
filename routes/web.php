<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {

    return view('index');
})->name('index');

Route::get('/blog', function () {

    return view('blog');
})->name('blog');

Route::get('/about', function () {

    return view('about');
});

Route::get('/blog-single', function () {

    return view('blog-single');
})->name('blog-single');

Route::get('/contact', function () {

    return view('contact');
});

Route::get('/faq', function () {

    return view('faq');
});


Route::get('/features', function () {

    return view('features');
});

Route::get('/features-single', function () {

    return view('features-single');
})->name('fea.single');


Route::prefix('dashboard')->middleware('auth')->group(function () {

    Route::get('/', function () {

        return view('dashboard.index');
    })->name('dashboard');

    Route::get('/chat', function () {

        return view('dashboard.chat');
    })->name('chat');

    Route::get('/portfolio', function () {

        return view('dashboard.portfolio');
    })->name('portfolio');
    Route::get('/products', function () {

        return view('dashboard.products');
    })->name('products');

    Route::get('/products-detail', function () {

        return view('dashboard.products-detail');
    })->name('products-detail');

    Route::get('/profiles', function () {

        return view('dashboard.profile');
    })->name('profiles.user');



    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/admins-list', [UserController::class, 'showAdmin'])->name('admins.list');
    Route::get('/users-list', [UserController::class, 'showUsers'])->name('users.list');
    Route::get('/architects-list', [UserController::class, 'showArchitects'])->name('architects.list');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destory');
    Route::get('/{id}/show-user-profile', [UserController::class, 'ShowProfile'])->name('user.showprofile');



    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/city',[ProfileController::class,'getcity'])->name('profile.city');
    Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
    Route::post('/profile/create', [ProfileController::class, 'store'])->name('profile.store');
    Route::post('/{id}/profile', [ProfileController::class, 'storeuser'])->name('profile.user.store');

    Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{id}/edit', [ProfileController::class, 'update'])->name('profile.update');
       Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/comment', [CommentController::class, 'index'])->name('comment.index');
    Route::get('/comment/create', [CommentController::class, 'create'])->name('comment.create');
    Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
    Route::get('/comment/{id}', [CommentController::class, 'edit'])->name('comment.edit');
    Route::put('/comment', [CommentController::class, 'update'])->name('comment.update');
    Route::delete('/comment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
});








Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard2', function () {
    return view('dashboard2');
})->name('dashboard2');
