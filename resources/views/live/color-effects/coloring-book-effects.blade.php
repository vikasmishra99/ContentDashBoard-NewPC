<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Coloring Book Effects : All Effects</title>
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
                           Coloring Book Effects
                        </h2>
                        <div class="page-pretitle">
                            List of all effects available in coloring book for applying effects
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
                               data-bs-target="#upload-main-effect-json">
                                Upload Effect Json File
                            </a>
                            <a href="#" class="btn btn-success d-sm-none btn-icon" data-bs-toggle="modal"
                               data-bs-target="#upload-main-effect-json" aria-label="Upload Main Effect Json">
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
                    <!--- Effects List --->
                    <div class="col-md-4 col-xl-3">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <!-- First Effect Thumbnail-->
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/effects/Thumb_effect_acryl.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Acryl</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <!-- Number of content uploaded in First Category is displayed here -->
                                        <h3 class="card-subtitle"><span class="bg-green-lt">7 Effects uploaded</span></h3>
                                        <!-- Buttons to go inside a category to upload content and edit category details and other actions -->
                                        <div class="card-text">
                                            <a href="{{route('live.color-effects.coloring-book-effect-all-files')}}"
                                               class="btn btn-primary ">View All Files</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-effect-modal">Edit this effect details</a>
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
                                         style="background-image: url('{{asset('dist/static/effects/Thumb_effect_canvas.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Canvas</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <!-- Number of content uploaded in First Category is displayed here -->
                                        <h3 class="card-subtitle"><span class="bg-green-lt">7 Effects uploaded</span>
                                        </h3>
                                        <!-- Buttons to go inside a category to upload content and edit category details and other actions -->
                                        <div class="card-text">
                                            <a href="{{route('live.color-effects.coloring-book-effect-all-files')}}"
                                               class="btn btn-primary ">View All Files</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-effect-modal">Edit this effect details</a>
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
                                         style="background-image: url('{{asset('dist/static/effects/Thumb_effect_cloth.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Cloth</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <!-- Number of content uploaded in First Category is displayed here -->
                                        <h3 class="card-subtitle"><span class="bg-green-lt">7 Effects uploaded</span>
                                        </h3>
                                        <!-- Buttons to go inside a category to upload content and edit category details and other actions -->
                                        <div class="card-text">
                                            <a href="{{route('live.color-effects.coloring-book-effect-all-files')}}"
                                               class="btn btn-primary ">View All Files</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-effect-modal">Edit this effect details</a>
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
                                         style="background-image: url('{{asset('dist/static/effects/Thumb_effect_folded_bath_towel.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Folded Path Towel</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <!-- Number of content uploaded in First Category is displayed here -->
                                        <h3 class="card-subtitle"><span class="bg-green-lt">7 Effects uploaded</span>
                                        </h3>
                                        <!-- Buttons to go inside a category to upload content and edit category details and other actions -->
                                        <div class="card-text">
                                            <a href="{{route('live.color-effects.coloring-book-effect-all-files')}}"
                                               class="btn btn-primary ">View All Files</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-effect-modal">Edit this effect details</a>
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
                                         style="background-image: url('{{asset('dist/static/effects/Thumb_effect_folded_glassy.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Glassy</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <!-- Number of content uploaded in First Category is displayed here -->
                                        <h3 class="card-subtitle"><span class="bg-green-lt">7 Effects uploaded</span>
                                        </h3>
                                        <!-- Buttons to go inside a category to upload content and edit category details and other actions -->
                                        <div class="card-text">
                                            <a href="{{route('live.color-effects.coloring-book-effect-all-files')}}"
                                               class="btn btn-primary ">View All Files</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-effect-modal">Edit this effect details</a>
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
                                         style="background-image: url('{{asset('dist/static/effects/Thumb_effect_folded_knitted.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Knitted</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <!-- Number of content uploaded in First Category is displayed here -->
                                        <h3 class="card-subtitle"><span class="bg-green-lt">7 Effects uploaded</span>
                                        </h3>
                                        <!-- Buttons to go inside a category to upload content and edit category details and other actions -->
                                        <div class="card-text">
                                            <a href="{{route('live.color-effects.coloring-book-effect-all-files')}}"
                                               class="btn btn-primary ">View All Files</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-effect-modal">Edit this effect details</a>
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
                                         style="background-image: url('{{asset('dist/static/effects/Thumb_effect_folded_leather.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Leather</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <!-- Number of content uploaded in First Category is displayed here -->
                                        <h3 class="card-subtitle"><span class="bg-green-lt">7 Effects uploaded</span>
                                        </h3>
                                        <!-- Buttons to go inside a category to upload content and edit category details and other actions -->
                                        <div class="card-text">
                                            <a href="{{route('live.color-effects.coloring-book-effect-all-files')}}"
                                               class="btn btn-primary ">View All Files</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-effect-modal">Edit this effect details</a>
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
                                         style="background-image: url('{{asset('dist/static/effects/Thumb_effect_folded_old_wood.webp')}}')"></div>
                                    <!-- First Effect Body Start Here -->
                                    <div class="card-body">
                                        <!-- First Effect Main Title Goes Here -->
                                        <h3 class="card-title">Old Wood</h3>
                                        <h5 class="text-muted">0 INR</h5>
                                        <!-- Number of content uploaded in First Category is displayed here -->
                                        <h3 class="card-subtitle"><span class="bg-green-lt">7 Effects uploaded</span>
                                        </h3>
                                        <!-- Buttons to go inside a category to upload content and edit category details and other actions -->
                                        <div class="card-text">
                                            <a href="{{route('live.color-effects.coloring-book-effect-all-files')}}"
                                               class="btn btn-primary ">View All Files</a>
                                        </div>
                                    </div>
                                    <!-- First Effect Main Body Ends Here-->

                                    <!-- First Effect Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark First Effect as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#edit-effect-modal">Edit this effect details</a>
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
@include('live.color-effects.modal.upload-main-effect-json')
@include('live.color-effects.modal.edit-effect-modal')
@include('live.includes.bottom-scripts')</body>
</html>
