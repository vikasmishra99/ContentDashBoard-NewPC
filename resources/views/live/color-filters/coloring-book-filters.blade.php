<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Coloring Book Filters : All Filters</title>
    @include('live.includes.top-scripts')
</head>
<body >
<div class="page">
    @include('live.coloringbook.includes.side-menu')
    <div class="page-wrapper">
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Coloring Book Filters
                        </h2>
                        <div class="page-pretitle">
                            List of all filters available in coloring book for applying filters
                        </div>
                    </div>

                    <!-- Page title actions -->
                    <div class="col-md-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <span class="d-none d-sm-inline"><a
                                    href="{{route('live.coloringbook.authentication.sign-in')}}"
                                    class="btn btn-white" data-bs-toggle="modal"
                                    data-bs-target="#logout-modal">Logout</a></span>
                            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                               data-bs-target="#upload-main-filter-json">
                                Upload Filter Json File
                            </a>
                            <a href="#" class="btn btn-success d-sm-none btn-icon" data-bs-toggle="modal"
                               data-bs-target="#upload-main-filter-json" aria-label="Upload Main Filter Json">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <line x1="12" y1="5" x2="12" y2="19"/>
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">
                    <!--- Filter List --->
                    <div class="col-md-4 col-xl-3">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <!-- First Filter Thumbnail-->
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/filters/alley.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Alley</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <div class="card-text">
                                            <a href="{{route('live.color-filters.coloring-book-filters-all-files')}}"
                                               class="btn btn-primary ">View Filter</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-filter-modal">Edit this filter details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- First Effect Footer Ends Here -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <!-- First Effect Thumbnail-->
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/filters/apple.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Apple</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <div class="card-text">
                                            <a href="{{route('live.color-filters.coloring-book-filters-all-files')}}"
                                               class="btn btn-primary ">View Filter</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-filter-modal">Edit this filter details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- First Effect Footer Ends Here -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <!-- First Effect Thumbnail-->
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/filters/banana.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Banana</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <div class="card-text">
                                            <a href="{{route('live.color-filters.coloring-book-filters-all-files')}}"
                                               class="btn btn-primary ">View Filter</a>
                                        </div>

                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-filter-modal">Edit this filter details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- First Effect Footer Ends Here -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <!-- First Effect Thumbnail-->
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/filters/canyon.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Canyon</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <div class="card-text">
                                            <a href="{{route('live.color-filters.coloring-book-filters-all-files')}}"
                                               class="btn btn-primary ">View Filter</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-filter-modal">Edit this filter details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- First Effect Footer Ends Here -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <!-- First Effect Thumbnail-->
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/filters/courtyard.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">CourtYard</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <div class="card-text">
                                            <a href="{{route('live.color-filters.coloring-book-filters-all-files')}}"
                                               class="btn btn-primary ">View Filter</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-filter-modal">Edit this filter details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- First Effect Footer Ends Here -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <!-- First Effect Thumbnail-->
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/filters/desert.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Desert</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <div class="card-text">
                                            <a href="{{route('live.color-filters.coloring-book-filters-all-files')}}"
                                               class="btn btn-primary ">View Filter</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-filter-modal">Edit this filter details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- First Effect Footer Ends Here -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <!-- First Effect Thumbnail-->
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/filters/grape.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Grape</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <div class="card-text">
                                            <a href="{{route('live.color-filters.coloring-book-filters-all-files')}}"
                                               class="btn btn-primary ">View Filter</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-filter-modal">Edit this filter details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- First Effect Footer Ends Here -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <!-- First Effect Thumbnail-->
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/filters/jungle.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Jungle</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <div class="card-text">
                                            <a href="{{route('live.color-filters.coloring-book-filters-all-files')}}"
                                               class="btn btn-primary ">View Filter</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-filter-modal">Edit this filter details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- First Effect Footer Ends Here -->
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
@include('live.color-filters.modal.upload-main-filter-json')
@include('live.color-filters.modal.edit-filter-modal')
@include('live.includes.bottom-scripts')</body>
</html>
