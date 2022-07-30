<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Upload Content to Category : 'Category Name'</title>
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
                        <h2 class="page-title">
                            'Category Name Goes Here'
                        </h2>

                        <div class="page-pretitle">
                            <span class="bg-green-lt"> Contents Uploaded in 'Category Name Goes Here'</span>
                        </div>
                    </div>
                    <!-- Go back to all category list -->
                    <div class="col-12 col-md-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <span class="d-none d-sm-inline"><a
                                        href="{{route('live.coloringbook.dashboard.categories')}}"
                                        class="btn btn-primary">Back to all categories</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="page-body">
            <div class="container-xl">
                <!-- Category Detail Card Start -->
                <div class="row row-cards mb-2">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <img src="{{asset('dist/static/coloring-book/categories/new.png')}}"
                                             alt="" class="rounded">
                                    </div>
                                    <div class="col">
                                        <h3 class="card-title mb-1">Category name goes here maxx 32 char
                                        </h3>

                                        <div class="text-muted">
                                            Category Description  goes here Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Aperiam deleniti
                                            fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit
                                            velit vitae voluptatem.
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                                                <a href="#" class="btn btn-primary w-100" data-bs-target="#add-content-to-category-modal" data-bs-toggle="modal">
                                                    Add Content
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                                                <a href="#" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#edit-category-details-modal">
                                                    Edit Category Details
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                                                <a href="#" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#delete-category-modal">
                                                    Delete this Category
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title bg-pink-lt">'Category Name' Details</div>
                                <div class="mb-2">
                                    Created at: <strong class="bg-green-lt">2020-01-05 16:42:29 UTC</strong>
                                </div>

                                <div class="mb-2">
                                    Category Age: <strong class="bg-green-lt">2 Days 5 Month ago</strong>
                                </div>

                                <div class="mb-2">
                                    Added to Slider: <strong class="bg-green-lt">YES</strong>
                                </div>
                                <div class="mb-2">
                                    Updated On: <strong class="bg-green-lt">2020-08-05 (2 days ago)</strong>
                                </div>
                                <div class="mb-2">
                                    Total uploaded Vectors: <strong class="bg-green-lt">18 Files</strong>
                                </div>

                                <div class="mb-2">
                                    <a href="#" class="btn btn-success w-100">
                                        Refresh this data
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Category Detail Card Ends -->



                <!-- All Uploaded content UI -->
                <div class="row row-cards">
                    <!-- Vector-1 -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm">
                            <img src="{{asset('dist/static/coloring-book/vector-contents/thumbs/sample_svg_1.png')}}"
                                 class="card-img-top d-block">

                            <div class="card-body">
                                <!-- Vector title -->
                                <div class="card-title bg-cyan-lt"> Contents Title Goes Here</div>
                                <!-- Vector Details -->
                                <div class="mb-2">
                                    Created at: <strong> 2020-01-05 16:42:29 UTC</strong>
                                </div>

                                <div class="mb-2">
                                    Updated On: <strong> 2020-08-05 ( 14 Hours Ago )</strong>
                                </div>

                                <div class="mb-2">
                                    Content ID: <strong> A67hnjwe75rhRt</strong>
                                </div>

                                <div class="mb-2">
                                    Trade Type: <strong>NONE / ADS / COIN BASED</strong>
                                </div>

                                <div class="mb-2">
                                    Aspect Ratio: <strong>Square 1 : 1</strong>
                                </div>

                                <div class="mb-2">
                                    Design Type: <strong>Contents Type 1</strong>
                                </div>

                                <div class="mb-2">
                                    Download: <strong>856</strong>
                                </div>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <div class="mb-2">
                                    <a href="{{route('live.coloringbook.dashboard.vector-content-details')}}" class="btn btn-primary w-100">
                                        VIEW DETAILS
                                    </a>
                                </div>
                                <div class="mb-2">
                                    <a href="#" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#delete-content-modal">
                                        DELETE THIS CONTENT
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vector-2 -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm">
                            <img src="{{asset('dist/static/coloring-book/vector-contents/thumbs/sample_svg_2.png')}}"
                                 class="card-img-top d-block">

                            <div class="card-body">
                                <!-- Vector title -->
                                <div class="card-title bg-cyan-lt"> Contents Title Goes Here</div>
                                <!-- Vector Details -->
                                <div class="mb-2">
                                    Created at: <strong> 2020-01-05 16:42:29 UTC</strong>
                                </div>

                                <div class="mb-2">
                                    Updated On: <strong> 2020-08-05 ( 14 Hours Ago )</strong>
                                </div>

                                <div class="mb-2">
                                    Content ID: <strong> A67hnjwe75rhRt</strong>
                                </div>

                                <div class="mb-2">
                                    Trade Type: <strong>NONE / ADS / COIN BASED</strong>
                                </div>

                                <div class="mb-2">
                                    Aspect Ratio: <strong>Square 1 : 1</strong>
                                </div>

                                <div class="mb-2">
                                    Design Type: <strong>Contents Type 1</strong>
                                </div>

                                <div class="mb-2">
                                    Download: <strong>856</strong>
                                </div>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <div class="mb-2">
                                    <a href="{{route('live.coloringbook.dashboard.vector-content-details')}}" class="btn btn-primary w-100">
                                        VIEW DETAILS
                                    </a>
                                </div>
                                <div class="mb-2">
                                    <a href="#" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#delete-content-modal">
                                        DELETE THIS CONTENT
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Content Card Ends Here -->

            </div>
        </div>
        @include('live.includes.footer')
    </div>
</div>
@include('live.coloringbook.modals.categories.delete-category-alert')
@include('live.coloringbook.modals.categories.edit-category-details')
@include('live.coloringbook.modals.content.add-content-to-category')
@include('live.coloringbook.modals.content.sucess-alert-content')
@include('live.coloringbook.modals.content.error-alert-content')
@include('live.coloringbook.modals.content.delete-content-alert')


@include('live.includes.bottom-scripts')
</body>
</html>