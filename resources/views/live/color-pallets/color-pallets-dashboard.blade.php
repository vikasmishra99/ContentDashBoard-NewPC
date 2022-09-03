<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Color Pallet -Main Dashboard</title>
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
                           Color Pallet Dashboard
                        </h2>

                        <div class="page-pretitle">
                            Color Pallet Dashboard
                        </div>
                    </div>

                    <div class="col-12 col-md-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <span class="d-none d-sm-inline"><a href="{{route('live.coloringbook.authentication.sign-in')}}" class="btn btn-white">Logout</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
              @include('live.coloringbook.dashboard.colorbook-analytics')
            </div>
        </div>
        @include('live.includes.footer')
    </div>
</div>
@include('live.includes.bottom-scripts')
</body>
</html>
