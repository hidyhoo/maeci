<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::get('/fondation', function () {
    return view('lafondation');
});
Route::get('/valeurs', function () {
    return view('valeurs');
});
Route::get('/transport', function () {
    return view('transport');
});

Route::get('/produits', function () {
    return view('produits');
});
Route::get('/retraite', function () {
    return view('retraite');
});
Route::get('/signup', function () {
    return view('auth.signup');
});
Route::get('/offresEmploi', function () {
    return view('offresEmploi');
});
Route::get('/principalesrealisations', function () {
    return view('principalesrealisations');
});
Route::get('/missions', function () {
    return view('missions');
});
Route::get('/gouvernance', function () {
    return view('gouvernance');
});
Route::get('/ed', function () {
    return view('education-formation');
});
Route::get('/datesInstitutionnelles', function () {
    return view('datesInstitutionnelles');
});
Route::get('/datelancementpresta', function () {
    return view('datelancementpresta');
});
Route::get('/appelsoffres', function () {
    return view('appelsoffres');
});
Route::get('/Appelmanifest', function () {
    return view('Appelmanifest');
});
Route::get('/aides', function () {
    return view('aides');
});
Route::get('/actualités', function () {
    return view('actualités');
});
Route::get('/santé', function () {
    return view('santé');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/logement', function () {
    return view('logement');
});
Route::get('/culture', function () {
    return view('cultureEstivage');
});
Route::get('/restauration', function () {
    return view('restauration');
});
Route::get('/transport', function () {
    return view('transport');
});
Route::get('/gouvernance', function () {
    return view('gouvernance');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/oublie', function () {
    return view('auth.oublie');
});
Route::get('/reset', function () {
    return view('auth.reset');
});

Route::get('/signup', [AuthController::class, 'register'])->name('signup');
Route::post('/signup', [AuthController::class, 'registerPost'])->name('signup');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');


