<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Coloring Book All Filters Files</title>
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
                           Coloring Book Filter Files List for : Filter Name
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="list-group card-list-group">
                                <div class="list-group-item">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto fs-3">
                                            1
                                        </div>
                                        <div class="col-auto">
                                            <img src="{{asset('dist/static/filters/alley.webp')}}" class="rounded" alt="effect file 1" width="40" height="40">
                                        </div>
                                        <div class="col">
                                            <a href="https://cdnlinkforthisFILTERimage/filename.jpg" class="text-muted">
                                                https://cdnlinkforthisFILTERimage/filename.jpg
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-danger w-100" data-bs-toggle="modal"
                                               data-bs-target="#delete-filter-modal">
                                              Delete this filter
                                            </a>
                                        </div>
                                        <div class="col-auto lh-1">
                                            <a href="#" class="btn btn-success w-100"data-bs-toggle="modal"
                                               data-bs-target="#upload-filter">
                                                Update this filter
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
@include('live.color-filters.modal.delete-filter-alert')
@include('live.color-filters.modal.upload-filter-list')
@include('live.includes.bottom-scripts')</body>
</html>
