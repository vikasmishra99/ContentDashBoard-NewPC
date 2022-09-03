<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
Route::get('/test',[DashboardController::class, 'test'])->name('live.test');

Route::get('index',[DashboardController::class, 'index'])->name('live.index');
Route::get('/',[DashboardController::class, 'main_sign_in'])->name('live.authentication.sign-in');
Route::get('/sign-up',[DashboardController::class, 'main_sign_up'])->name('live.authentication.sign-up');
Route::get('/forget-password',[DashboardController::class, 'forget_password'])->name('live.authentication.forget-password');

Route::get('/coloring-book-sign-in',[DashboardController::class, 'coloring_book_sign_in'])->name('live.coloringbook.authentication.sign-in');
Route::get('/coloring-book-sign-up',[DashboardController::class, 'coloring_book_sign_up'])->name('live.coloringbook.authentication.sign-up');
Route::get('/coloring-book-forget-password',[DashboardController::class, 'coloring_book_forget_password'])->name('live.coloringbook.authentication.forget-password');

Route::get('/coloring-book-main-dashboard',[DashboardController::class, 'coloring_book_main_dashboard'])->name('live.coloringbook.main-dashboard');
Route::get('/coloring-book-main-categories',[DashboardController::class, 'coloring_book_main_categories'])->name('live.coloringbook.dashboard.categories');
Route::get('/coloring-book-categories-content',[DashboardController::class, 'coloring_book_main_vector_content'])->name('live.coloringbook.dashboard.vector-content');
Route::get('/coloring-book-categories-content-details',[DashboardController::class, 'coloring_book_main_vector_content_details'])->name('live.coloringbook.dashboard.vector-content-details');

Route::get('/coloring-book-home-sliders',[DashboardController::class, 'coloring_book_home_sliders'])->name('live.coloringbook.dashboard.home-sliders');

Route::get('/coloring-book-synced-users',[DashboardController::class, 'coloring_book_synced_users'])->name('live.coloringbook.users.synced-users');
Route::get('/coloring-book-blocked-users',[DashboardController::class, 'coloring_book_blocked_users'])->name('live.coloringbook.users.blocked-users');
Route::get('/coloring-book-deleted-users',[DashboardController::class, 'coloring_book_deleted_users'])->name('live.coloringbook.users.deleted-users');
Route::get('/coloring-book-reported-content',[DashboardController::class, 'coloring_book_reported_content'])->name('live.coloringbook.users.reported-content');

Route::get('/coloring-book-premium-categories',[DashboardController::class, 'coloring_book_premium_categories'])->name('live.coloringbook.dashboard.premium.categories');
Route::get('/coloring-book-premium-categories-content',[DashboardController::class, 'coloring_book_premium_categories_content'])->name('live.coloringbook.dashboard.premium.premium-vector-content');
Route::get('/coloring-book-premium-categories-content-details',[DashboardController::class, 'coloring_book_premium_categories_content_details'])->name('live.coloringbook.dashboard.premium.premium-vector-content-details');

Route::get('/coloring-book-explore-categories',[DashboardController::class, 'coloring_book_explore_categories'])->name('live.coloringbook.dashboard.explore.explore-categories');
Route::get('/coloring-book-explore-categories-content-packs',[DashboardController::class, 'coloring_book_explore_categories_content_packs'])->name('live.coloringbook.dashboard.explore.explore-categories-content-packs');
Route::get('/coloring-book-explore-categories-content-pack-details',[DashboardController::class, 'coloring_book_explore_categories_content_pack_details'])->name('live.coloringbook.dashboard.explore.explore-categories-content-pack-details');
Route::get('/coloring-book-explore-categories-content-details',[DashboardController::class, 'coloring_book_explore_categories_content_details'])->name('live.coloringbook.dashboard.explore.explore-categories-content-details');


Route::get('/color-pallet-dashboard',[DashboardController::class, 'color_pallet_dashboard'])->name('live.color-pallets.color-pallets-dashboard');
Route::get('/all-pallets',[DashboardController::class, 'all_pallets'])->name('live.color-pallets.all-pallets');
Route::get('/solid-pallet-ui',[DashboardController::class, 'solid_pallet_ui'])->name('live.color-pallets.solid-pallet-ui');
Route::get('/daily-color-pallet-ui',[DashboardController::class, 'daily_color_pallet_ui'])->name('live.color-pallets.dailycolor-pallet-ui');
Route::get('/create-pallet',[DashboardController::class, 'create_pallet'])->name('live.color-pallets.create-pallet');

Route::get('/changelog',[DashboardController::class, 'changelog'])->name('live.pages.changelog');
Route::get('/changelog_app',[DashboardController::class, 'changelog_app'])->name('live.pages.changelog_app');
Route::get('/privacy_policy',[DashboardController::class, 'privacy_policy'])->name('live.pages.privacy_policy');
Route::get('/terms_conditions',[DashboardController::class, 'terms_conditions'])->name('live.pages.terms_conditions');

Route::get('/documentation',[DashboardController::class, 'documentation'])->name('live.pages.docs.documentation');
Route::get('/module_M1',[DashboardController::class, 'module_M1'])->name('live.pages.docs.module_M1');
Route::get('/module_M2',[DashboardController::class, 'module_M2'])->name('live.pages.docs.module_M2');
Route::get('/module_M3',[DashboardController::class, 'module_M3'])->name('live.pages.docs.module_M3');
Route::get('/module_M4',[DashboardController::class, 'module_M4'])->name('live.pages.docs.module_M4');
