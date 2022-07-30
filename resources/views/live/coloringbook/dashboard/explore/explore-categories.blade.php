<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Coloring Book -Explore Categories and Packs Creation </title>
    @include('live.includes.top-scripts')
</head>
<body>
<div class="page">
    @include('live.coloringbook.includes.side-menu')
    <div class="page-wrapper">
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Coloring Book Explore Categories and Packs
                        </h2>

                        <div class="page-pretitle">
                            All Explore Categories &amp; Packs currently available in coloring book's &nbsp;<span class="bg-green-lt">Android /&nbsp;iOS App EXPLORE FRAGMENT</span>
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
                               data-bs-target="#create-new-explore-category-modal">
                                Create New Explore Category with Packs
                            </a>
                            <a href="#" class="btn btn-success d-sm-none btn-icon" data-bs-toggle="modal"
                               data-bs-target="#create-new-explore-category-modal" aria-label="Create New Explore Category">
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
                <!-- Data Row -->
                <div class="row row-cards">

                    <!-- Category New cat Start -->
                    <div class="col-md-6 col-xl-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/coloring-book/explore-categories/thumb-categories-header/explore-category-thumb_1.png')}}')"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Explore Main Category Title &nbsp;</h3>

                                        <h3 class="card-subtitle"><span class="bg-green-lt">10 Packs uploaded</span></h3>

                                        <div class="card-text">
                                            <a href="{{route('live.coloringbook.dashboard.explore.explore-categories-content-packs')}}"
                                               class="btn btn-primary ">View Packs</a>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <!-- Mark Category as slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#attach-to-slider-modal">Attach this category to home
                                                    slider</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category New cat Ends -->


                    <!-- Category People  Start -->
                    <div class="col-md-6 col-xl-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/coloring-book/explore-categories/thumb-categories-header/explore-category-thumb_2.png')}}')"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Explore Category Main Title</h3>

                                        <h3 class="card-subtitle"><span class="bg-green-lt">1 Packs Added</span></h3>

                                        <div class="card-text">
                                            <a href="#" class="btn btn-primary ">View Packs</a>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <!-- Mark Category as slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#attach-to-slider-modal">Attach this category to home
                                                    slider</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category People cat Ends -->

                    <!-- Category Sports  Start -->
                    <div class="col-md-6 col-xl-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/coloring-book/explore-categories/thumb-categories-header/explore-category-thumb_3.png')}}')"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Explore Category Main Title</h3>

                                        <h3 class="card-subtitle"><span class="bg-green-lt">17 Contents uploaded</span></h3>

                                        <div class="card-text">
                                            <a href="#" class="btn btn-primary ">View Content</a>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <!-- Mark Category as slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#update-remove-to-slider-modal">This category is
                                                    attached to home slider</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category Sports cat Ends -->

                    <!-- Category Space  Start -->
                    <div class="col-md-6 col-xl-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/coloring-book/explore-categories/thumb-categories-header/explore-category-thumb_4.png')}}')"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Explore Category Main Title</h3>

                                        <h3 class="card-subtitle"><span class="bg-green-lt">17 Contents uploaded</span></h3>

                                        <div class="card-text">
                                            <a href="#" class="btn btn-primary ">View Content</a>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <!-- Mark Category as slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#">Attach this category to home slider</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category Space cat Ends -->

                    <!-- Category Flowers  Start -->
                    <div class="col-md-6 col-xl-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/coloring-book/explore-categories/thumb-categories-header/explore-category-thumb_5.png')}}')"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Explore Category Main Title</h3>

                                        <h3 class="card-subtitle"><span class="bg-green-lt">17 Contents uploaded</span></h3>

                                        <div class="card-text">
                                            <a href="#" class="btn btn-primary ">View Content</a>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <!-- Mark Category as slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#">Attach this category to home slider</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category Flowers cat Ends -->

                    <!-- Category Festivals  Start -->
                    <div class="col-md-6 col-xl-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/coloring-book/explore-categories/thumb-categories-header/explore-category-thumb_6.png')}}')"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Explore Category Main Title</h3>

                                        <h3 class="card-subtitle"><span class="bg-green-lt">17 Contents uploaded</span></h3>

                                        <div class="card-text">
                                            <a href="#" class="btn btn-primary ">View Content</a>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <!-- Mark Category as slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#">Attach this category to home slider</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category Festivals cat Ends -->

                </div>

            </div>
        </div>
        @include('live.includes.footer')
    </div>
</div>
@include('live.coloringbook.modals.explore-categories.create-new-explore-category')
@include('live.coloringbook.modals.categories.sucess-alert')
@include('live.coloringbook.modals.categories.error-alert')
@include('live.coloringbook.modals.categories.attach-to-slider-category')
@include('live.coloringbook.modals.categories.slider-sucess-alert')
@include('live.coloringbook.modals.categories.slider-error-alert')
@include('live.coloringbook.modals.categories.update-remove-to-slider-category')
@include('live.coloringbook.modals.logout-alert')

@include('live.includes.bottom-scripts')
</body>
</html>