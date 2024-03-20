<?php
// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;

use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Judge\Dashboard as JudgeDashboard;
use App\Livewire\User\Dashboard as UserDashboard;


// Authentication

# Login
// Login page with Livewire
Route::get('/login',\App\Livewire\LoginForm::class)->name('login');

# Logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');






Route::get('/', function () {
    return view('auth.register');
})->name('register');

// Route::post('/register', [RegisterUserController::class, 'register'])->name('register');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('/judge/dashboard', JudgeDashboard::class)->name('judge.dashboard');
    Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard');

    Route::get('/entries', \App\Livewire\User\EntryIndex::class)->name('entries.index');
    Route::get('/entries/create', \App\Livewire\User\EntryCreate::class)->name('entries.create');
    Route::get('/invoices', \App\Livewire\User\InvoiceIndex::class)->name('invoices.index');
    Route::get('/invoices/{invoice}', \App\Livewire\User\InvoiceShow::class)->name('invoices.show');
    
    
    Route::get('/entries/{entry}', function ($entry) {
        return view('entries.show', ['entry' => $entry]);
    })->name('entries.show');
    
    Route::get('/judge/entries/{entry}', function ($entry) {
        return view('judge.entries.show', ['entry' => $entry]);
    })->name('judge.entries.show');
});

// Route::get('/forgot-password', function () {
//     return view('auth.forgot-password');
// })->name('password.request');

// Route::get('/reset-password/{token}', function ($token) {
//     return view('auth.reset-password', ['token' => $token]);
// })->name('password.reset');

// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::get('/email/resend', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');





/** Authentication routes */
// Login page
Route::get('/login',\App\Livewire\LoginForm::class)->name('login');

// Route::get('/login', [AuthenticatedSessionController::class, 'create'])
//                  ->middleware('guest')
//                  ->name('login');
// // Handle login POST
// Route::post('/login', [AuthenticatedSessionController::class, 'store'])
//                 ->middleware('guest');
// // Logout POST
// Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
//                 ->middleware('auth')
//                 ->name('logout');
// Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');




// Forgot password page
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

// Handle forgot password POST
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

// Registration page
Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

// Handle registration POST
Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');






