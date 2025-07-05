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
    Route::get('/admin/add-niveau', [NiveauController::class, 'index'])->name('niveau.create');
    Route::get('/admin/add-frais', [FraisController::class, 'index'])->name('frais.create');

    //Route destinee au specialite
    Route::get('/admin/specialite', [SpecialiteController::class, 'index'])->name('specialite.index');
    Route::get('/admin/add-specialite/', [SpecialiteController::class, 'create'])->name('specialite.create');
    Route::post('/admin/add-specialite/store', [SpecialiteController::class, 'store'])->name('specialite.store');
    Route::delete('/admin/delete-specialite/{id}', [SpecialiteController::class, 'delete'])->name('specialite.delete');
    Route::get('/admin/edit-specialite/{id}', [SpecialiteController::class, 'edit'])->name('specialite.edit');
    Route::put('/admin/update-specialite/{id}', [SpecialiteController::class, 'update'])->name('specialite.update');

    Route::get('/admin/dashboard2', [StudentController::class, 'index2']);
});
require __DIR__ . '/auth.php';
