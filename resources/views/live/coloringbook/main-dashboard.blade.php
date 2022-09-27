<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Coloring Book -Main Dashboard</title>
    @include('live.includes.top-scripts')
</head>
<body>
<div class="page">
    @include('live.coloringbook.includes.side-menu')
    <div class="page-wrapper">
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">Main Dashboard</h2>
                        <div class="page-pretitle">Coloring Book App Dashboard</div>
                    </div>

                    <div class="col-12 col-md-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <span class="d-none d-sm-inline">
                                <a href="{{route('live.coloringbook.authentication.sign-in')}}" class="btn btn-white">Logout</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="hr-text hr-text-left text-green">statistics One</div>
                    <!-- Categories Card -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">Total Categories</div>
                                </div>
                                <div class="h1 mb-3">1000</div>
                                <div class="d-flex mb-2">
                                    <div>Last Synced On: 01-09-2022</div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                        <span class="visually-hidden">75% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Explore Categories Card -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">Total Explore Categories</div>
                                </div>
                                <div class="h1 mb-3">1000</div>
                                <div class="d-flex mb-2">
                                    <div>Last Synced On: 01-09-2022</div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                        <span class="visually-hidden">75% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Premium Categories Card -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">Total Premium Categories</div>
                                </div>
                                <div class="h1 mb-3">1000</div>
                                <div class="d-flex mb-2">
                                    <div>Last Synced On: 01-09-2022</div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-yellow" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                        <span class="visually-hidden">75% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sliders Card -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">Total Sliders</div>
                                </div>
                                <div class="h1 mb-3">1000</div>
                                <div class="d-flex mb-2">
                                    <div>Last Synced On: 01-09-2022</div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                        <span class="visually-hidden">75% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-text hr-text-left text-green">statistics two</div>
                    <!-- Total Downloads -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">Total App Downloads</div>
                                </div>
                                <div class="h1 mb-3">1000</div>
                                <div class="d-flex mb-2">
                                    <div>Last Synced On: 01-09-2022</div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                        <span class="visually-hidden">75% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Total Installs -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">Total App Installs</div>
                                </div>
                                <div class="h1 mb-3">1000</div>
                                <div class="d-flex mb-2">
                                    <div>Last Synced On: 01-09-2022</div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                        <span class="visually-hidden">75% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Total Users -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">Total Users</div>
                                </div>
                                <div class="h1 mb-3">1000</div>
                                <div class="d-flex mb-2">
                                    <div>Last Synced On: 01-09-2022</div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                        <span class="visually-hidden">75% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Total Uploaded Content -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">Total Uploaded Content</div>
                                </div>
                                <div class="h1 mb-3">100044</div>
                                <div class="d-flex mb-2">
                                    <div>Last Synced On: 01-09-2022</div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                        <span class="visually-hidden">75% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-text hr-text-left text-purple">statistics Three</div>
                    <!--Other Data -->
                    <div class="col-12">
                        <div class="row row-cards">
                            <!-- Top Android Version -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Top Android Versions
                                                </div>
                                                <div class="text-muted">
                                                    <a href="{{route('live.coloringbook.analytics.top-android-versions')}}">View Installed Android Version</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top Android Countries -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Top Countries
                                                </div>
                                                <div class="text-muted">
                                                   <a href="{{route('live.coloringbook.analytics.top-installed-countries')}}">View Installed Countries</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top iOS Version -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Top iOS Versions
                                                </div>
                                                <div class="text-muted">
                                                    <a href="">View Installed iOS Version</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top Users -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Top Users
                                                </div>
                                                <div class="text-muted">
                                                    <a href="{{route('live.coloringbook.analytics.users.top-users')}}">View Top Users</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Other Data -->
                    <div class="col-12">
                        <div class="row row-cards">
                            <!-- Top Categories Version -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Top Categories
                                                </div>
                                                <div class="text-muted">
                                                    <a href="{{route('live.coloringbook.analytics.categories.top-categories')}}">View Top Categories</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top Explore Categories Version -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Top Explore Categories
                                                </div>
                                                <div class="text-muted">
                                                    <a href="{{route('live.coloringbook.analytics.explore-categories.top-explore-categories')}}">View Top Explore Categories</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top Premium Categories Version -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Top Premium Categories
                                                </div>
                                                <div class="text-muted">
                                                    <a href="{{route('live.coloringbook.analytics.premium-categories.top-premium-categories')}}">View Top Premium Categories</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top Devices Version -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Top Installed Devices
                                                </div>
                                                <div class="text-muted">
                                                    <a href="{{route('live.coloringbook.analytics.top-installed-devices')}}">View Top Installed Devices</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Other Data -->
                    <div class="hr-text hr-text-left text-red">statistics four</div>
                    <div class="col-12">
                        <div class="row row-cards">
                            <!-- Top Content -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Top Downloaded Content (SVGs)
                                                </div>
                                                <div class="text-muted">
                                                    <a href="{{route('live.coloringbook.analytics.content.top-downloaded-content')}}">View Top Downloaded Content</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top Packs -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Top Downloaded Explore Packs
                                                </div>
                                                <div class="text-muted">
                                                    <a href="{{route('live.coloringbook.analytics.explore-categories.top-explore-packs')}}">View Top Downloaded Packs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top Premium Categories Version -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Top Downloaded Premium Content
                                                </div>
                                                <div class="text-muted">
                                                    <a href="{{route('live.coloringbook.analytics.premium-categories.top-premium-content')}}">View Top Premium Contents</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-text hr-text-left text-orange">statistics five</div>
                    <div class="col-12">
                        <div class="row row-cards">
                            <!-- Daily New User -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Daily New Users
                                                </div>
                                                <div class="text-muted">
                                                    <a href="{{route('live.coloringbook.analytics.users.daily-new-users')}}">View Daily New Users</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Weekly New Content -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card card-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="font-weight-medium">
                                                    Weekly New Content
                                                </div>
                                                <div class="text-muted">
                                                    <a href="">View Weekly New Content</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @include('live.includes.footer')
    </div>
</div>
@include('live.includes.bottom-scripts')
</body>
</html>
