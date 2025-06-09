<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});
// Route::get('/', function () {
//     return view('pages.registrations.index.user1', ['type_menu' => 'dashboard']);
// });

Route::get('/home', [UserController::class, 'home']);

Route::get('/users/{user}', function (App\Models\User $user) {return $user->name;})->name('users.show');

Route::resource('registrations', RegistrationController::class);
Route::post('registrations/create', [RegistrationController::class, 'create'])->name('registrations.createPost');
Route::post('registrations/{registration}/edit', [RegistrationController::class, 'edit'])->name('registrations.editPost');