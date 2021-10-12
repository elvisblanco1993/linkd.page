<?php

use App\Http\Livewire\Page\Settings;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Livewire\Page\Appearance;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('web/home');
    return redirect()->route('login');
});

Route::get('/{handler}', [PageController::class, 'public'])->name('linkd.public');

Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group( function () {
    /**
     * Linkd home page
     */
    Route::get('/dashboard', function () {return view('/dashboard');})->name('dashboard');

    /**
     * Linkd links page
     */
    Route::get('/links', function () {return view('/links');})->name('linkd.links');

    /**
     * Linkd styles page
     */
    Route::get('/appearance', Appearance::class)->name('linkd.appearance');

    /**
     * Linkd settings page
     */
    Route::get('/settings', Settings::class)->name('linkd.settings');
});
