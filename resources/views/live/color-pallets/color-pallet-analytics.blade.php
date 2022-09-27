<div class="row row-deck row-cards">

    <!-- Data for total users Start -->
    <div class="col-sm-6 col-lg-6">
        <div class="card">
            <div class="card-body">
                <!-- Total Downloaded Pallets -->
                <div class="d-flex align-items-center">
                    <div class="subheader">Total Downloaded Pallets</div>
                    <!-- Pallet Sorting -->
                    <div class="ms-auto lh-1">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item active" href="#">Last 7 days</a>
                                <a class="dropdown-item" href="#">Last 30 days</a>
                                <a class="dropdown-item" href="#">Last 3 months</a>
                                <a class="dropdown-item" href="#">Last 6 months</a>
                                <a class="dropdown-item" href="#">Last 1 Year</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h1 mb-3 text-success">8856</div>
                <div class="d-flex mb-2">
                    <div>Total number of downloaded pallets<br>(Includes both Gradient and Solid Palltes)</div>
                </div>
                <div class="me-auto">
                        <span class="text-blue d-inline-flex align-items-center lh-1">
                       4398 Color Pallets
                        </span><br>
                    <span class="text-purple d-inline-flex align-items-center lh-1">
                        4458 Gradient Pallets
                    </span>
                </div>


                <div class="progress progress-sm">
                    <div class="progress-bar bg-green" style="width: 100%" role="progressbar" aria-valuenow="100"
                         aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data for total downloaded pallets Ends -->


    <!-- Data for total uploaded pallets Start -->
    <div class="col-sm-6 col-lg-6">
        <div class="card">
            <div class="card-body">
                <!-- Total uploaded pallets -->
                <div class="d-flex align-items-center">
                    <div class="subheader">Total Uploaded Pallets</div>
                    <!--  Sorting -->
                    <div class="ms-auto lh-1">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item active" href="#">Last 7 days</a>
                                <a class="dropdown-item" href="#">Last 30 days</a>
                                <a class="dropdown-item" href="#">Last 3 months</a>
                                <a class="dropdown-item" href="#">Last 6 months</a>
                                <a class="dropdown-item" href="#">Last 1 Year</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h1 mb-3 text-info">12345</div>
                <div class="d-flex mb-2">
                    <div>Total number of uploaded pallets<br>(Includes both Gradient and Solid Palltes)</div>
                </div>
                <div class="me-auto">
                        <span class="text-blue d-inline-flex align-items-center lh-1">
                       4398 Color Pallets
                        </span><br>
                    <span class="text-purple d-inline-flex align-items-center lh-1">
                        4458 Gradient Pallets
                    </span>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-blue" style="width: 100%" role="progressbar" aria-valuenow="100"
                         aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data for total uploaded pallets Ends -->


    <!-- Data for most popular pallets Start -->
    <div class="col-12">
        <div class="row row-cards">
            <div class="col-sm-6 col-lg-3">
                <div class="card card-md">
                    <div class="card-body text-center">
                        <div class="page-title-lg fw-bold ">MOST POPULAR</div>
                        <div class="hr-text text-green">Top 10 Most Popular Pallets</div>
                        <div class="text-center mt-4">
                            <a href="{{route('live.color-pallets.most-popular-pallets')}}" class="btn w-100 btn-success">View Pallets</a>
                        </div>
                    </div>
            </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card card-md">
                    <div class="card-body text-center">
                        <div class="page-title-lg fw-bold "> POPULAR THIS WEEK</div>
                        <div class="hr-text text-green">Top 10 Most Popular Pallets of this Week</div>
                        <div class="text-center mt-4">
                            <a href="{{route('live.color-pallets.popular-pallets-this-week')}}" class="btn w-100 btn-success">View Pallets</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card card-md">
                    <div class="card-body text-center">
                        <div class="page-title-lg fw-bold "> POPULAR THIS MONTH</div>
                        <div class="hr-text text-green">Top 10 Most Popular Pallets of this Month</div>
                        <div class="text-center mt-4">
                            <a href="{{route('live.color-pallets.popular-pallets-this-month')}}" class="btn w-100 btn-success">View Pallets</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card card-md">
                    <div class="card-body text-center">
                        <div class="page-title-lg fw-bold "> POPULAR THIS YEAR</div>
                        <div class="hr-text text-green">Top 10 Most Popular Pallets of this Year</div>
                        <div class="text-center mt-4">
                            <a href="{{route('live.color-pallets.popular-pallets-this-year')}}" class="btn w-100 btn-success">View Pallets</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="col-12">
        <div class="card card-md">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="page-title-lg fw-bold ">All Time Popular Pallets.</h2>
                        <p class="m-0 text-green">All Time Popular Pallets From Our Pallets Collections</p>
                    </div>
                    <div class="col-auto">
                        <a href="{{route('live.color-pallets.all-time-popular-pallets')}}" class="btn w-100 btn-success">
                            View Pallets
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
