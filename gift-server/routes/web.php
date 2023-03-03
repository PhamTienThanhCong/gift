<?php

use App\Http\Controllers\auth\userController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// route basic for user
Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/about", [HomeController::class, "about"])->name("about");
Route::get("/contact", [HomeController::class, "contact"])->name("contact");

// route for auth
// group and middleware authNotLogin
Route::group(["middleware" => "authNotLogin"], function () {
    Route::get("/login", [userController::class, "login"])->name("login");
    Route::get("/register", [userController::class, "register"])->name("register");
    Route::get("/forgot-password", [userController::class, "forgotPassword"])->name("forgot-password");
}); 

// route process for auth
Route::post("/login", [userController::class, "loginProcess"])->name("login-process");
Route::post("/register", [userController::class, "registerProcess"])->name("register-process");
Route::post("/forgot-password", [userController::class, "forgotPasswordProcess"])->name("forgot-password-process");

Route::group(["middleware" => 'authLogined'], function() {
    Route::get("/logout", [userController::class, "logout"])->name("logout");
});

// route for dashboard admin flex /admin
Route::group(["middleware" => 'authAdminLogined', "prefix" => "myadmin"], function() {
    Route::get("/", [dashboardController::class, "index"])->name("admin.dashboard");
});

// Route::group(["middleware" => 'authUserLogined', "prefix" => "user"], function() {
//     Route::get("/", [dashboardController::class, "index"])->name("user.dashboard");
// });
