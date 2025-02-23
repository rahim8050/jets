<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\PageController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\CarController;
use App\Http\Controllers\contentTesting;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\contentTestingController;
use App\Models\User;
use Illuminate\Http\Request;

Route::get('/',function(){
    return view('car.index');
});
    
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/search',function(Request $request){
    
    $users=User::search($request->input('query'))
    ->orderBy('id', 'desc')
    ->paginate(10);
    return view('search',compact('users')); 
});
// Route::get('/search', [CarController::class, 'search'])->name('search');
Route::get('page/display',[PageController::class,'index']);
Route::resource('page',PageController::class);
// Route::apiResource('products', ProductController::class);
Route::get('/car/search', [CarController::class,'search'])->name('car.search');
Route::resource('car', CarController::class);
Route::get('/indexing', [CarController::class, 'search'])->name('indexing');
Route::get('/content', [contentTestingController::class, 'index'])->name('content');
Route::get('/login', [LogInController::class, 'create'])->name('signup');
Route::get('/signup', [SignupController::class, 'signup'])->name('signup');
Route::get('/home', [homecontroller::class, 'index'])->name('index');

