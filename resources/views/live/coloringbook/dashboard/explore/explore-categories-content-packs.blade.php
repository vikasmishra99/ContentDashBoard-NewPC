<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Explore Category : Create or Add Packs</title>
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
                           Explore Category Name
                        </h2>

                        <div class="page-pretitle">
                            <span class="bg-green-lt"> Packs Created in 'Explore Category'</span>
                        </div>
                    </div>

                    <div class="col-12 col-md-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <span class="d-none d-sm-inline"><a
                                        href="{{route('live.coloringbook.dashboard.explore.explore-categories')}}"
                                        class="btn btn-primary">Back to Explore Categories</a></span>
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
                                        <img src="{{asset('dist/static/coloring-book/explore-categories/thumb-categories-header/explore-category-thumb_1.png')}}"
                                             alt="" class="rounded">
                                    </div>
                                    <div class="col">
                                        <h3 class="card-title mb-1">Explore Category name maxx allowed character are 32
                                        </h3>

                                        <div class="text-muted">
                                            Explore Category Description Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Aperiam deleniti
                                            fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit
                                            velit vitae voluptatem.
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                                                <a href="#" class="btn btn-primary w-100" data-bs-target="#add-pack-to-explore-category-modal" data-bs-toggle="modal" title="Add Only Premium Content">
                                                    Add More Packs
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                                                <a href="#" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#edit-explore-category-details-modal" title="Edit premium Category Details">
                                                    Edit Explore Category Details
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                                                <a href="#" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#delete-category-modal" title="Delete This Premium Category">
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
                                <div class="card-title bg-pink-lt">Explore Category Details</div>
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
                                    Total Packs: <strong class="bg-green-lt">10 Packs</strong>
                                </div>
                                <div class="mb-2">
                                    Total Vectors In All Packs: <strong class="bg-green-lt">200</strong>
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

                <!-- Packs List Start Here -->


                <div class="row row-cards">
                    <!-- Vector-1 -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm">
                            <img src="{{asset('dist/static/coloring-book/explore-categories/thumb-pack-header/explore-pack-thumb_1.png')}}"
                                 class="card-img-top d-block">

                            <div class="card-body">
                                <!-- Vector title -->
                                <div class="card-title bg-cyan-lt">Pack Title Goes Here</div>
                                <!-- Vector Details -->
                                <div class="mb-2">
                                    Created at: <strong> 2020-01-05 16:42:29 UTC</strong>
                                </div>

                                <div class="mb-2">
                                    Updated On: <strong> 2020-08-05 ( 14 Hours Ago )</strong>
                                </div>

                                <div class="mb-2">
                                    Pack ID: <strong> A67hnjwe75rhRt</strong>
                                </div>

                                <div class="mb-2">
                                    Pack Price: <strong>INR 170</strong>
                                </div>

                                <div class="mb-2">
                                    Total Content Added: <strong>10</strong>
                                </div>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <div class="mb-2">
                                    <a href="#" class="btn btn-primary w-100" data-bs-target="#add-content-to-pack-modal" data-bs-toggle="modal">
                                        ADD CONTENT TO THIS PACK
                                    </a>
                                </div>
                                <div class="mb-2">
                                    <a href="{{route('live.coloringbook.dashboard.explore.explore-categories-content-pack-details')}}" class="btn btn-success w-100">
                                        VIEW PACK DETAILS
                                    </a>
                                </div>
                                <div class="mb-2">
                                    <a href="#" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#delete-explore-pack-modal">
                                        DELETE THIS PACK
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vector-2 -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm">
                            <img src="{{asset('dist/static/coloring-book/explore-categories/thumb-pack-header/explore-pack-thumb_2.png')}}"
                                 class="card-img-top d-block">

                            <div class="card-body">
                                <!-- Vector title -->
                                <div class="card-title bg-cyan-lt"> Pack Title Goes Here</div>
                                <!-- Vector Details -->
                                <div class="mb-2">
                                    Created at: <strong> 2020-01-05 16:42:29 UTC</strong>
                                </div>

                                <div class="mb-2">
                                    Updated On: <strong> 2020-08-05 ( 14 Hours Ago )</strong>
                                </div>

                                <div class="mb-2">
                                    Pack ID: <strong> A67hnjwe75rhRt</strong>
                                </div>

                                <div class="mb-2">
                                    Pack Price: <strong>INR 170</strong>
                                </div>

                                <div class="mb-2">
                                    Total Content Added: <strong>10</strong>
                                </div>
                            </div>
                            <!-- Card footer -->

                            <div class="card-footer">
                                <div class="mb-2">
                                    <a href="#" class="btn btn-primary w-100" data-bs-target="#add-content-to-pack-modal" data-bs-toggle="modal">
                                        ADD CONTENT TO THIS PACK
                                    </a>
                                </div>
                                <div class="mb-2">
                                    <a href="{{route('live.coloringbook.dashboard.premium.premium-vector-content-details')}}" class="btn btn-success w-100">
                                        VIEW PACK DETAILS
                                    </a>
                                </div>
                                <div class="mb-2">
                                    <a href="#" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#delete-explore-pack-modal">
                                        DELETE THIS PACK
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

@include('live.coloringbook.modals.premium-content.add-premium-content-to-premium-category')
@include('live.coloringbook.modals.content.sucess-alert-content')
@include('live.coloringbook.modals.content.error-alert-content')
@include('live.coloringbook.modals.explore-categories.edit-explore-category-details')
@include('live.coloringbook.modals.explore-categories.delete-explore-pack-alert')
@include('live.coloringbook.modals.explore-categories.pack.add-pack-to-explore-category')
@include('live.coloringbook.modals.explore-categories.pack.add-content-to-pack-modal')
@include('live.includes.bottom-scripts')
</body>
</html>