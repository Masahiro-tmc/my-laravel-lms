<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\Admin\StudentController; 
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});
// Student Routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
     // Route to list students
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    // Route to show student creation form
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    // Add this under the existing admin student routes
    
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
    
    // Route to update the student
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update'); // This is the missing route    
    // Route to store the new student
    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
});



Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/register', [AdminRegisterController::class, 'showRegisterForm'])->name('admin.register.form');
Route::post('/admin/register', [AdminRegisterController::class, 'register'])->name('admin.register');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
