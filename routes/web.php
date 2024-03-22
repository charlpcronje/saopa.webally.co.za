<?php
// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordResetLinkController;

##### AUTHENTICATION ROUTES
# Redirect user based on their role to their respective dashboard
Route::get('/', function () {
    if (Auth::check()) {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('judge')) {
            return redirect()->route('judge.dashboard');
        } else {
            return redirect()->route('user.dashboard');
        }
    } else {
        return redirect()->route('register');
    }
})->name('home');
Route::get('/register', \App\Livewire\User\Register::class)->name('register');
#####
# Login / logout & password reset routes
Route::get('/forgot-password', \App\Livewire\Auth\ForgotPassword::class)->name('password.request');
Route::get('/reset-password/{token}', \App\Livewire\Auth\ResetPassword::class)->name('password.reset');
Route::get('/email/verify', \App\Livewire\Auth\VerifyEmail::class)->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', \App\Livewire\Auth\VerifyEmailHandler::class)->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/email/resend', \App\Livewire\Auth\ResendVerificationEmail::class)->middleware(['auth', 'throttle:6,1'])->name('verification.send');
##### Authentication
# Login / logout
Route::get('/login',\App\Livewire\LoginForm::class)->name('login');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');


Route::middleware(['auth'])->group(function () {
    ##### 
    # DASHBOARD ROUTES
    Route::get('/admin/dashboard', App\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
    Route::get('/judge/dashboard', App\Livewire\Judge\Dashboard::class)->name('judge.dashboard');
    Route::get('/user/dashboard', App\Livewire\Judge\Dashboard::class)->name('user.dashboard');

    #####
    # ENTRY ROUTES
    Route::get('/entries', \App\Livewire\User\EntryIndex::class)->name('entries.index');
    Route::get('/entries/create', \App\Livewire\User\EntryCreate::class)->name('entries.create');
    Route::get('/entries/{entry}', function ($entry) {
        return view('entries.show', ['entry' => $entry]);
    })->name('entries.show');
    Route::get('/judge/entries/{entry}', function ($entry) {
        return view('judge.entries.show', ['entry' => $entry]);
    })->name('judge.entries.show');


    #####
    # INVOICE ROUTES
    Route::get('/invoices', \App\Livewire\User\InvoiceIndex::class)->name('invoices.index');
    Route::get('/invoices/{invoice}', \App\Livewire\User\InvoiceShow::class)->name('invoices.show');
    
    

    
    
    
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/resend', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');





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







