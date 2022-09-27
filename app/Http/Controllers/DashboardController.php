<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response as Res;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function test(){return view('live.test');}
    /* Dashboard Profile Routes */
    public function profile(){return view('live.pages.profile');}
    public function settings(){return view('live.pages.settings');}
    /* Admin Routes */
    public function admin_sign_in(){return view('live.authentication.admin.admin-sign-in');}
    public function admin_forget_password(){return view('live.authentication.admin.admin-forget-password');}
    /* Main Login and Signup Routes */
    public function index(){return view('live.index');}
    public function main_sign_up(){return view('live.authentication.sign-up');}
    public function forget_password(){return view('live.authentication.forget-password');}

    /* Coloring Book Login and Signup Routes */
    public function coloring_book_sign_in(){return view('live.coloringbook.authentication.sign-in');}
    public function coloring_book_sign_up(){return view('live.coloringbook.authentication.sign-up');}
    public function coloring_book_forget_password(){return view('live.coloringbook.authentication.forget-password');}

    /* Coloring Book Dashboard Routes */
    public function coloring_book_main_dashboard(){return view('live.coloringbook.main-dashboard');}
    public function top_android_versions(){return view('live.coloringbook.analytics.top-android-versions');}
    public function top_installed_countries(){return view('live.coloringbook.analytics.top-installed-countries');}
    public function top_users(){return view('live.coloringbook.analytics.users.top-users');}
    public function daily_new_users(){return view('live.coloringbook.analytics.users.daily-new-users');}
    public function single_user(){return view('live.coloringbook.analytics.users.single-user-profile');}
    public function top_categories(){return view('live.coloringbook.analytics.categories.top-categories');}
    public function top_explore_categories(){return view('live.coloringbook.analytics.explore-categories.top-explore-categories');}
    public function top_explore_packs(){return view('live.coloringbook.analytics.explore-categories.top-explore-packs');}
    public function top_premium_categories(){return view('live.coloringbook.analytics.premium-categories.top-premium-categories');}
    public function top_premium_content(){return view('live.coloringbook.analytics.premium-categories.top-premium-content');}
    public function top_installed_devices(){return view('live.coloringbook.analytics.top-installed-devices');}
    public function top_downloaded_content(){return view('live.coloringbook.analytics.content.top-downloaded-content');}

    /* Coloring Book Categories Routes */
    public function coloring_book_main_categories(){return view('live.coloringbook.dashboard.categories');}
    public function coloring_book_main_vector_content(){return view('live.coloringbook.dashboard.vector-content');}
    public function coloring_book_main_vector_content_details(){return view('live.coloringbook.dashboard.vector-content-details');}

    /* Coloring Book Sliders Routes */
    public function coloring_book_home_sliders(){return view('live.coloringbook.dashboard.home-sliders');}

    /* Coloring Book Users Routes */
    public function coloring_book_synced_users(){return view('live.coloringbook.users.synced-users');}
    public function coloring_book_blocked_users(){return view('live.coloringbook.users.blocked-users');}
    public function coloring_book_deleted_users(){return view('live.coloringbook.users.deleted-users');}
    public function coloring_book_reported_content(){return view('live.coloringbook.users.reported-content');}

    /* Coloring Book Premium Categories Routes */
    public function coloring_book_premium_categories(){return view('live.coloringbook.dashboard.premium.categories');}
    public function coloring_book_premium_categories_content(){return view('live.coloringbook.dashboard.premium.premium-vector-content');}
    public function coloring_book_premium_categories_content_details(){return view('live.coloringbook.dashboard.premium.premium-vector-content-details');}

    /* Coloring Book Explore Categories Routes */
    public function coloring_book_explore_categories(){return view('live.coloringbook.dashboard.explore.explore-categories');}
    public function coloring_book_explore_categories_content_packs(){return view('live.coloringbook.dashboard.explore.explore-categories-content-packs');}
    public function coloring_book_explore_categories_content_pack_details(){return view('live.coloringbook.dashboard.explore.explore-categories-content-pack-details');}
    public function coloring_book_explore_categories_content_details(){return view('live.coloringbook.dashboard.explore.explore-categories-content-details');}

    /* Coloring Book Color Pallet Dashboard and Related Routes */
    public function color_pallet_dashboard(){return view('live.color-pallets.color-pallets-dashboard');}
    public function all_pallets(){return view('live.color-pallets.all-pallets');}
    public function solid_pallet_ui(){return view('live.color-pallets.solid-pallet-ui');}
    public function daily_color_pallet_ui(){return view('live.color-pallets.dailycolor-pallet-ui');}
    public function create_pallet(){return view('live.color-pallets.create-pallet');}
    public function most_popular_pallets(){return view('live.color-pallets.most-popular-pallets');}
    public function popular_pallets_this_week(){return view('live.color-pallets.popular-pallets-this-week');}
    public function popular_pallets_this_month(){return view('live.color-pallets.popular-pallets-this-month');}
    public function popular_pallets_this_year(){return view('live.color-pallets.popular-pallets-this-year');}
    public function all_time_popular_pallets(){return view('live.color-pallets.all-time-popular-pallets');}

    /* Coloring Book Dashboard Effects and Related Routes */
    public function coloring_book_effects(){return view('live.color-effects.coloring-book-effects');}
    public function coloring_book_effect_all_file_list(){return view('live.color-effects.coloring-book-effect-all-files');}

    /* Coloring Book Dashboard Filters and Related Routes */
    public function coloring_book_filters(){return view('live.color-filters.coloring-book-filters');}
    public function coloring_book_filters_all_file_list(){return view('live.color-filters.coloring-book-filters-all-files');}


    /* Coloring Book Legal Routes */
    public function changelog(){return view('live.pages.changelog');}
    public function changelog_app(){return view('live.pages.changelog_app');}
    public function privacy_policy(){return view('live.pages.privacy_policy');}
    public function terms_conditions(){return view('live.pages.terms_conditions');}

    /* Coloring Book Basic Documentation Routes */
    public function documentation(){return view('live.pages.docs.documentation');}
    public function module_M1(){return view('live.pages.docs.module_M1');}
    public function module_M2(){return view('live.pages.docs.module_M2');}
    public function module_M3(){return view('live.pages.docs.module_M3');}
    public function module_M4(){return view('live.pages.docs.module_M4');}
}
