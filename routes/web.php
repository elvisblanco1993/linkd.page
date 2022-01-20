<?php

use Illuminate\Http\Request;
use App\Http\Livewire\Page\Settings;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Page\Appearance;
use App\Http\Controllers\PageController;
use App\Http\Livewire\Customers\Index;

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
    return view('web/home');
});

Route::prefix('linkd')->get('/pricing', function () {
    return view('web/pricing');
})->name('pricing');

Route::prefix('linkd')->get('/support', function () {return view('web.support');})->name('support');

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

    /**
     * Billing Portal
     */
    Route::get('/billing-portal', function (Request $request) {
        return $request->user()->redirectToBillingPortal(route('dashboard'));
    })->name('billing');

    /**
     * Subscribe to Monthly Plan
     */
    Route::get('/monthly-subscription-checkout', function (Request $request) {
        return $request->user()
            ->newSubscription('linkd', config('plans.price_monthly'))
            ->allowPromotionCodes()
            ->checkout([
                'success_url' => route('dashboard'),
                'cancel_url' => route('pricing'),
            ]);
    })->name('subscribe.monthly');

    /**
     * Subscribe to Yearly Plan
     */
    Route::get('/yearly-subscription-checkout', function (Request $request) {
        return $request->user()
            ->newSubscription('linkd', config('plans.price_yearly'))
            ->allowPromotionCodes()
            ->checkout([
                'success_url' => route('dashboard'),
                'cancel_url' => route('pricing'),
            ]);
    })->name('subscribe.yearly');
});

/**
 * Administrator only Routes
 */
Route::middleware(['auth:sanctum', 'verified', 'can:admin'])->prefix('admin')->group(function () {
    Route::get('/customers', Index::class)->name('customers');
});
