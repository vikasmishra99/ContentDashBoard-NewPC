<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Content Details : 'Category Name'</title>
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
                            Contents Title Goes Here : Contents ID Goes Here
                        </h2>

                        <div class="page-pretitle">
                            <span class="bg-green-lt"> Details of the Contents (Ajkkdsj791289) uploaded in 'Category Name' Categories</span>
                        </div>
                    </div>

                    <div class="col-12 col-md-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <span class="d-none d-sm-inline"><a
                                        href="{{route('live.coloringbook.dashboard.vector-content')}}"
                                        class="btn btn-primary">Back to Category</a></span>
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
                                        <img src="{{asset('dist/static/coloring-book/vector-contents/thumbs/sample_svg_1.png')}}"
                                             alt="" class="rounded">
                                    </div>
                                    <div class="col">
                                        <div class="row g-2 align-items-center mt-1">
                                            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                                                <a href="#" class="btn btn-primary" data-bs-target="#edit-update-content-details" data-bs-toggle="modal">
                                                    Edit this Content
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-2 align-items-center">
                                            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                                                <a href="#" class="btn btn-danger" data-bs-target="#copy-content-modal" data-bs-toggle="modal">
                                                    Copy this Content to other Categories(S)
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-2 align-items-center">
                                            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                                                <a href="#" class="btn btn-danger" data-bs-target="#move-content-modal" data-bs-toggle="modal">
                                                    Move this Content to other Category
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-2 align-items-center">
                                            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                                                <a href="{{asset('dist/static/coloring-book/vector-contents/thumbs/sample_svg_1.png')}}" target="_blank" class="btn btn-success">
                                                    View Original Content
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row align-items-center">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-6 col-sm-4 col-md-2 col-xl dumped-tag">
                                                    #tag1 #tag2

                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title bg-pink-lt">Contents Details</div>
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
                                <div class="mb-2">
                                    <a href="#" class="btn btn-success">
                                       VIEW CONTENT GRID
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row row-cards mb-2">

                </div>
            </div>
            <!-- Category Detail Card Ends -->
        </div>
    </div>
    @include('live.includes.footer')
</div>

@include('live.coloringbook.modals.content.sucess-alert-content')
@include('live.coloringbook.modals.content.error-alert-content')
@include('live.coloringbook.modals.content.delete-content-alert')
@include('live.coloringbook.modals.content.edit-update-content-details')
@include('live.includes.bottom-scripts')
@include('live.coloringbook.modals.content.copy-content-modal')
@include('live.coloringbook.modals.content.move-content-modal')
</body>
</html>