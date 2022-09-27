<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Daily New Users : Coloring Book Dashboard</title>
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
                        <h2 class="page-title">Daily New Users</h2>
                        <div class="page-pretitle">Data shows the daily new users based on content downloaded</div>
                    </div>
                    <div class="col-12 col-md-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <span class="d-none d-sm-inline">
                                <a href="{{route('live.coloringbook.main-dashboard')}}"
                                   class="btn btn-info">Back</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">
                    <div class="card-header">
                        <div class="ms-auto lh-1">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body p-4 text-center">
                                <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url({{asset('dist/static/avatars/000m.jpg')}})"></span>
                                <h3 class="m-0 mb-1">Rahul Sharma</h3>
                                <div class="text-muted">abcdk@gmail.com</div>
                            </div>
                            <div class="d-flex">
                                <a href="{{route('live.coloringbook.analytics.users.single-user-profile')}}" class="card-btn">View User</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body p-4 text-center">
                                <span class="avatar avatar-xl mb-3 avatar-rounded">JL</span>
                                <h3 class="m-0 mb-1">Johny Lever</h3>
                                <div class="text-muted">Cakak@gmail.com</div>

                            </div>
                            <div class="d-flex">
                                <a href="{{route('live.coloringbook.analytics.users.single-user-profile')}}" class="card-btn">View User</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @include('live.includes.footer')
    </div>
</div>
<!-- Libs JS -->
@include('live.includes.bottom-scripts')</body>
</html>
