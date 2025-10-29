<?php

use Illuminate\Support\Facades\Route; // ← obligatoire
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminSkillController;
use App\Models\Contact;
use Illuminate\Http\Request;

// Pages publiques
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/projets', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/projet/{id}', [PortfolioController::class, 'projectShow'])->name('project.show');
Route::get('/a-propos', [PortfolioController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Pages admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('projects', AdminProjectController::class, [
        'as' => 'admin'
    ]);

    Route::resource('skills', AdminSkillController::class, [
        'as' => 'admin'
    ]);

    Route::get('contacts', [AdminController::class, 'contacts'])->name('admin.contacts');
});
