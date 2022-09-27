<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Top Premium Categories : Coloring Book Dashboard</title>
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
                        <h2 class="page-title">Top Premium Categories</h2>
                        <div class="page-pretitle">Data shows the number of installs based on device android versions</div>
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
                <div class="row row-deck row-cards">
                    <div class="col-lg-12">
                        <div class="card">
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
                            <div class="list-group card-list-group">
                                <div class="list-group-item">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto fs-3">
                                            1
                                        </div>
                                        <div class="col-auto">
                                            <img src="{{asset('dist/static/coloring-book/premium-categories/thumbs-header/premium-category-thumbs_1.png')}}" class="rounded" alt="effect file 1" width="40" height="40">
                                        </div>
                                        <div class="col">
                                            <a href="https://cdnlinkforthisefect/filename.jpg" class="text-muted">
                                                https://cdnlinkforthisefect/PremiumcategoryONE_ID
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{route('live.coloringbook.dashboard.premium.premium-vector-content')}}" class="btn btn-primary w-100">
                                                Open Premium Category
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto fs-3">
                                            2
                                        </div>
                                        <div class="col-auto">
                                            <img src="{{asset('dist/static/coloring-book/premium-categories/thumbs-header/premium-category-thumbs_2.png')}}" class="rounded" alt="effect file 1" width="40" height="40">
                                        </div>
                                        <div class="col">
                                            <a href="https://cdnlinkforthisefect/filename.jpg" class="text-muted">
                                                https://cdnlinkforthisefect/PremiumcategoryTWO_ID
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{route('live.coloringbook.dashboard.premium.premium-vector-content')}}" class="btn btn-primary w-100">
                                                Open Premium Category
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto fs-3">
                                            3
                                        </div>
                                        <div class="col-auto">
                                            <img src="{{asset('dist/static/coloring-book/premium-categories/thumbs-header/premium-category-thumbs_3.png')}}" class="rounded" alt="effect file 1" width="40" height="40">
                                        </div>
                                        <div class="col">
                                            <a href="https://cdnlinkforthisefect/filename.jpg" class="text-muted">
                                                https://cdnlinkforthisefect/PremiumcategoryTHREE_ID
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{route('live.coloringbook.dashboard.premium.premium-vector-content')}}" class="btn btn-primary w-100">
                                                Open Premium Category
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto fs-3">
                                            4
                                        </div>
                                        <div class="col-auto">
                                            <img src="{{asset('dist/static/coloring-book/premium-categories/thumbs-header/premium-category-thumbs_4.png')}}" class="rounded" alt="effect file 1" width="40" height="40">
                                        </div>
                                        <div class="col">
                                            <a href="https://cdnlinkforthisefect/filename.jpg" class="text-muted">
                                                https://cdnlinkforthisefect/PremiumcategoryFOUR_ID
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{route('live.coloringbook.dashboard.premium.premium-vector-content')}}" class="btn btn-primary w-100">
                                                Open Premium Category
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto fs-3">
                                            5
                                        </div>
                                        <div class="col-auto">
                                            <img src="{{asset('dist/static/coloring-book/premium-categories/thumbs-header/premium-category-thumbs_5.png')}}" class="rounded" alt="effect file 1" width="40" height="40">
                                        </div>
                                        <div class="col">
                                            <a href="https://cdnlinkforthisefect/filename.jpg" class="text-muted">
                                                https://cdnlinkforthisefect/PremiumcategoryFIVE_ID
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{route('live.coloringbook.dashboard.premium.premium-vector-content')}}" class="btn btn-primary w-100">
                                                Open Premium Category
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto fs-3">
                                            6
                                        </div>
                                        <div class="col-auto">
                                            <img src="{{asset('dist/static/coloring-book/premium-categories/thumbs-header/premium-category-thumbs_6.png')}}" class="rounded" alt="effect file 1" width="40" height="40">
                                        </div>
                                        <div class="col">
                                            <a href="https://cdnlinkforthisefect/filename.jpg" class="text-muted">
                                                https://cdnlinkforthisefect/PremiumcategorySIX_ID
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{route('live.coloringbook.dashboard.premium.premium-vector-content')}}" class="btn btn-primary w-100">
                                                Open Premium Category
                                            </a>
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
<!-- Libs JS -->
@include('live.includes.bottom-scripts')</body>
</html>
