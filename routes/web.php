<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PricingController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin/projects', [ProjectController::class, 'index'])->name('projects.index');
// Pricing Plans Routes (Manual Resource)

Route::get('/pricing-plans', [PricingController::class, 'index'])->name('pricing-plans.index');
Route::get('/pricing-plans/create', [PricingController::class, 'create'])->name('pricing-plans.create');
Route::post('/pricing-plans', [PricingController::class, 'store'])->name('pricing-plans.store');
Route::get('/pricing-plans/{pricingPlan}', [PricingController::class, 'show'])->name('pricing-plans.show');
Route::get('/pricing-plans/{pricingPlan}/edit', [PricingController::class, 'edit'])->name('pricing-plans.edit');
Route::put('/pricing-plans/{pricingPlan}', [PricingController::class, 'update'])->name('pricing-plans.update');
Route::delete('/pricing-plans/{pricingPlan}', [PricingController::class, 'destroy'])->name('pricing-plans.destroy');



Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
