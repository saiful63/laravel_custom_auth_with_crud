<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });



// Route::group(['middleware'=>'guest'],function(){
//     Route::get('/login',[AuthController::class,'login'])->name('login');
//     Route::post('/register',[AuthController::class,'register_user'])->name('register');
//     Route::post('/login',[AuthController::class,'user_login'])->name('login');
//     Route::get('/register',[AuthController::class,'register'])->name('register');
// });


// Route::group(['middleware'=>'auth'],function(){
//     Route::get('/home',[ProductController::class,'ShowData']);
//     Route::get('/insertion_interface',[ProductController::class,'InsertionInterface']);
//     Route::post('/store_data',[ProductController::class,'StoreData']);
//     Route::get('/edit_data/{id}',[ProductController::class,'EditData']);
//     Route::post('/update_data/{id}',[ProductController::class,'UpdateData']);
//     Route::get('/delete_data/{id}',[ProductController::class,'DeleteData']);
//     Route::get('/logout',[AuthController::class,'logout'])->name('logout');
// });

// Route::get('/',[AuthController::class,'register'])->name('register');








Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'register_user'])->name('PostRegister');
    Route::post('/login', [AuthController::class, 'user_login'])->name('login');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [ProductController::class, 'ShowData']);
    Route::get('/insertion_interface', [ProductController::class, 'InsertionInterface']);
    Route::post('/store_data', [ProductController::class, 'StoreData']);
    Route::get('/edit_data/{id}', [ProductController::class, 'EditData']);
    Route::post('/update_data/{id}', [ProductController::class, 'UpdateData']);
    Route::get('/delete_data/{id}', [ProductController::class, 'DeleteData']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    //User role route
    Route::get('role', [RoleController::class, 'index'])->name('RoleIndex');
    Route::get('role_create', [RoleController::class, 'create'])->name('RoleCreate');
    Route::get('assign_user', [UserController::class, 'AssignUser'])->name('AssignUser');
});






