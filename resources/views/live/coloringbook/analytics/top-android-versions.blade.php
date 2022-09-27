<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Top Android Version : Coloring Book Dashboard</title>
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
                        <h2 class="page-title">Top Android Versions</h2>
                        <div class="page-pretitle">Data shows the number of installs based on device android versions</div>
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
                                <h3 class="card-title">Android Version Distribution</h3>
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
                                    <th>Android Version</th>
                                    <th>Installs (Compared to total installs)</th>
                                    <th colspan="2">Install Percentage (Compared to total installs)</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>13</td>
                                    <td>3,550</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>3,550</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>3,550</td>
                                    <td>40%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>3,550</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>3,550</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.1.0</td>
                                    <td>3,550</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.0.0</td>
                                    <td>3,550</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.1</td>
                                    <td>3,550</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.0</td>
                                    <td>1,798</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 35.96%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.0</td>
                                    <td>1,245</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 24.9%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.1</td>
                                    <td>986</td>
                                    <td>20%</td>
                                    <td class="w-50">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary" style="width: 19.72%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.0</td>
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
