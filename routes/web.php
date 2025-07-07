<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\FiliereController;
use App\Http\Controllers\Admin\NiveauController;
use App\Http\Controllers\Admin\FraisController;
use App\Http\Controllers\Admin\SpecialiteController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dash', [StudentController::class, 'dashboard']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/students', [StudentController::class, 'index'])->name('student.index');
    Route::get('/admin/student/create', [StudentController::class, 'create'])->name('student.create');
    Route::post('/admin/student/store', [StudentController::class, 'store'])->name('student.store');
    Route::get('/admin/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::put('/admin/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::delete('/admin/student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');
    // Add other admin routes here
    // Route::get('/admin/add-filiere', [FiliereController::class, 'index'])->name('student.create');
    Route::get('/admin/add-niveau', [NiveauController::class, 'create'])->name('niveau.create');
    Route::post('/admin/add-niveau', [NiveauController::class, 'store'])->name('niveau.store');
    Route::get('/admin/niveau', [NiveauController::class, 'index'])->name('niveau.index');
    Route::delete('/admin/niveau/{id}', [NiveauController::class, 'delete'])->name('niveau.delete');
    Route::get('/admin/niveau/{id}', [NiveauController::class, 'edit'])->name('niveau.edit');
    Route::put('/admin/niveau/{id}', [NiveauController::class, 'update'])->name('niveau.update');



    //Route destinee au specialite
    Route::get('/admin/specialite', [SpecialiteController::class, 'index'])->name('specialite.index');
    Route::get('/admin/add-specialite/', [SpecialiteController::class, 'create'])->name('specialite.create');
    Route::post('/admin/add-specialite/store', [SpecialiteController::class, 'store'])->name('specialite.store');
    Route::delete('/admin/delete-specialite/{id}', [SpecialiteController::class, 'delete'])->name('specialite.delete');
    Route::get('/admin/edit-specialite/{id}', [SpecialiteController::class, 'edit'])->name('specialite.edit');
    Route::put('/admin/update-specialite/{id}', [SpecialiteController::class, 'update'])->name('specialite.update');

    Route::get('/admin/specialites/{id}', [SpecialiteController::class, 'show'])->name('specialite.show');
    Route::get('/admin/dashboard2', [StudentController::class, 'index2']);

    Route::get('/admin/add-frais', [FraisController::class, 'create'])->name('frais.create');
    Route::post('/admin/add-frais', [FraisController::class, 'store'])->name('frais.store');
    Route::get('/admin/frais', [FraisController::class, 'index'])->name('frais.index');
    Route::get('/admin/update-frais/{id}', [FraisController::class, 'edit'])->name('frais.edit');
    Route::put('/admin/update-frais/{id}', [FraisController::class, 'update'])->name('frais.update');
    Route::delete('/admin/frais/delete/{id}', [FraisController::class, 'delete'])->name('frais.delete');

    //Route destinee au filiere
    Route::get('/admin/add-filiere', [FiliereController::class, 'create'])->name('filiere.create');
});
require __DIR__ . '/auth.php';
