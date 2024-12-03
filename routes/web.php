<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TombolaController;
use App\Http\Controllers\CustomerController;

// Route::middleware(['basic.auth'])->group(function () {
    // last error : 
    // Handle the GET request to /customer/save and redirect to the form page
// Route::get('/customer/save', function() {
//     return redirect()->route('lp-page'); // Redirect to a route where the form is displayed
// });
    // lang
    Route::get('lang/{locale}', function ($locale) {
        if (in_array($locale, config('app.available_locales'))) {
            session(['locale' => $locale]);
        }
        return redirect()->back();
    })->name('lang.switch');

    

    // Protect these routes with HTTP Basic Authentication
    Route::get('/GROWTH`MARKETING`PARTENER/dashboard', [GameController::class, 'getWinners'])->name('dashboard');
    Route::get('/game', function () {
        return view('game.game');
    })->name('game');
// Route for the login page - only accessible if not authenticated
Route::middleware(['guest'])->group(function () {
    Route::get('/GROWTH`MARKETING`PARTENER/login', function () {
        // Check if the user is authenticated
        if (auth()->check()) {
            return redirect()->route('dashboard'); // Redirect to dashboard if authenticated
        }
        return view('login'); // Show the login view if not authenticated
    })->name('login');

    Route::post('/GROWTH`MARKETING`PARTENER/login', [AuthController::class, 'login'])->name('login.post');
});


// Route for the dashboard - only accessible if authenticated
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/GROWTH`MARKETING`PARTENER/all-entries', function () {
    return view('all_entries');
})->name('all_entries');

// Route for the dashboard - only accessible if authenticated
Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // }
    Route::get('/GROWTH`MARKETING`PARTENER/dashboard', [GameController::class, 'getWinners'])->name('dashboard');
    Route::get('/GROWTH`MARKETING`PARTENER/all-entries', [GameController::class, 'index']);

    // Route for logging out
    Route::post('/GROWTH`MARKETING`PARTENER/logout', [AuthController::class, 'logout'])->name('logout');
});



// Route::get('/all-entries', [GameController::class, 'index']);

Route::get('/game',function(){
    try {
        return view('game.game');
    }catch (\Exception $e) {
        return redirect()->route('lp-page');
    }
})->name('game');
// Route::get('/game', [CustomerController::class, 'checkPage'])->name('check-redirect');


// Route::get('/game-page',function(){
//     return view('game.game_page');
// });

Route::get('/game-page', [TombolaController::class, 'index'])->name('game-page');
// Route::post('/validate-guess', [TombolaController::class, 'validateGuess']);
// Route::post('/validate-guess', [TombolaController::class, 'validateGuess']);
Route::post('/validate-guess', [TombolaController::class, 'validateGuess'])->name('validate-guess');


Route::get('/landing-page',function(){
    try {
        return view('game.landing_page');
    }catch (\Exception $e) {
        return redirect()->route('lp-page');
    }
})->name('lp-page');


// form
Route::post('/customer/save', [CustomerController::class, 'store'])->name('customer.save');
Route::get('/game-page', [TombolaController::class, 'index'])->name('game-page');

// Results Page
Route::get('/win',function(){
    return view('results.winner');
})->name('winner');

Route::get('/lose',function(){
    return view('results.loser');
})->name('loser');

Route::get('/wait_to_play',function(){
    return view('results.wait_to_play');
})->name('wait_to_play');

Route::get('/bad-receipt',function(){
    return view('results.bad_receipt');
})->name('bad_receipt');

Route::get('/campaign_finished',function(){
    return view('results.campaign_finished');
})->name('campaign_finished');



Route::get('/test2',function(){
    return view('test2');
})->name('test2');

Route::get('/GROWTH~pwd"GeneratoR"', [GameController::class, 'showSecPwd']);


// });

