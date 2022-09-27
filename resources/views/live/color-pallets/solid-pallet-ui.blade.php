<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Solid Color Pallets UI</title>
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
                            Basic Color Pallets
                        </h2>
                    </div>
                    <!--Buttons List -->
                    <div class="col-md-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <!-- Create New Category Button -->
                            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                               data-bs-target="#add-new-pallet-modal">
                                Add new Pallet
                            </a>
                            <!-- Create New Category Button For Mobile Devices -->
                            <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                               data-bs-target="#add-new-pallet-modal" aria-label="Add new Pallet">
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
                @include('live.color-pallets.includes.solid-color-pallets')
                </div>
            </div>
        </div>
        @include('live.includes.footer')
    </div>
</div>
<!-- Libs JS -->
@include('live.color-pallets.modal.add-new-pallet-modal')
@include('live.color-pallets.modal.edit-pallet-modal')
@include('live.color-pallets.modal.paste-json-modal')
@include('live.includes.bottom-scripts')</body>
</html>
