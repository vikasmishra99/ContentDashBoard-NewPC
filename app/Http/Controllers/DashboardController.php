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
    public function index(){return view('live.index');}
    public function main_sign_in(){return view('live.authentication.sign-in');}
    public function main_sign_up(){return view('live.authentication.sign-up');}
    public function forget_password(){return view('live.authentication.forget-password');}

    public function coloring_book_sign_in(){return view('live.coloringbook.authentication.sign-in');}
    public function coloring_book_sign_up(){return view('live.coloringbook.authentication.sign-up');}
    public function coloring_book_forget_password(){return view('live.coloringbook.authentication.forget-password');}

    public function coloring_book_main_dashboard(){return view('live.coloringbook.main-dashboard');}

    public function coloring_book_main_categories(){return view('live.coloringbook.dashboard.categories');}
    public function coloring_book_main_vector_content(){return view('live.coloringbook.dashboard.vector-content');}
    public function coloring_book_main_vector_content_details(){return view('live.coloringbook.dashboard.vector-content-details');}

    public function coloring_book_home_sliders(){return view('live.coloringbook.dashboard.home-sliders');}

    public function coloring_book_synced_users(){return view('live.coloringbook.users.synced-users');}
    public function coloring_book_blocked_users(){return view('live.coloringbook.users.blocked-users');}
    public function coloring_book_deleted_users(){return view('live.coloringbook.users.deleted-users');}
    public function coloring_book_reported_content(){return view('live.coloringbook.users.reported-content');}

    public function coloring_book_premium_categories(){return view('live.coloringbook.dashboard.premium.categories');}
    public function coloring_book_premium_categories_content(){return view('live.coloringbook.dashboard.premium.premium-vector-content');}
    public function coloring_book_premium_categories_content_details(){return view('live.coloringbook.dashboard.premium.premium-vector-content-details');}

    public function coloring_book_explore_categories(){return view('live.coloringbook.dashboard.explore.explore-categories');}
    public function coloring_book_explore_categories_content_packs(){return view('live.coloringbook.dashboard.explore.explore-categories-content-packs');}
    public function coloring_book_explore_categories_content_pack_details(){return view('live.coloringbook.dashboard.explore.explore-categories-content-pack-details');}
    public function coloring_book_explore_categories_content_details(){return view('live.coloringbook.dashboard.explore.explore-categories-content-details');}

    public function changelog(){return view('live.pages.changelog');}
    public function changelog_app(){return view('live.pages.changelog_app');}
    public function privacy_policy(){return view('live.pages.privacy_policy');}
    public function terms_conditions(){return view('live.pages.terms_conditions');}
    public function documentation(){return view('live.pages.docs.documentation');}
    public function module_M1(){return view('live.pages.docs.module_M1');}
    public function module_M2(){return view('live.pages.docs.module_M2');}
    public function module_M3(){return view('live.pages.docs.module_M3');}
    public function module_M4(){return view('live.pages.docs.module_M4');}
}
