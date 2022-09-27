<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Top Countries : Coloring Book Dashboard</title>
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
                        <h2 class="page-title">Top Installed Countries</h2>
                        <div class="page-pretitle">Data shows the number of installs based on users country location</div>
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
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Installed Country Distribution</h3>
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
                            <table class="table card-table table-vcenter">
                                <thead>
                                <tr>
                                    <th>Country Name</th>
                                    <th>Installs (Compared to total installs)</th>
                                    <th colspan="2">Install Percentage (Compared to total installs)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="flag flag-country-us"></span>
                                        United States</td>
                                    <td>3,550</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="flag flag-country-gb"></span>
                                        United Kingdom</td>
                                    <td>3,550</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="flag flag-country-de"></span>
                                        Germany</td>
                                    <td>3,550</td>
                                    <td>40%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="flag flag-country-br"></span>
                                        Brazil</td>
                                    <td>3,550</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="flag flag-country-pl"></span>
                                        Poland</td>
                                    <td>3,550</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="flag flag-country-in"></span>
                                        India</td>
                                    <td>3,550</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="flag flag-country-af"></span>
                                        Afghanistan</td>
                                    <td>3,550</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <span class="flag flag-country-dz"></span>
                                        Algeria</td>
                                    <td>3,550</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="flag flag-country-ar"></span>
                                        Argentina</td>
                                    <td>1,798</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 35.96%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="flag flag-country-au"></span>
                                        Australia</td>
                                    <td>1,245</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 24.9%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="flag flag-country-np"></span>
                                        Nepal</td>
                                    <td>986</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 19.72%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="flag flag-country-sa"></span>
                                        Saudi Arabia</td>
                                    <td>854</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 17.08%"></div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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
