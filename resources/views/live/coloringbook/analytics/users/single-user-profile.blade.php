<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Single User Profile : Coloring Book Dashboard</title>
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
                        <h2 class="page-title">Single User Profile</h2>
                        <div class="page-pretitle">Data shows the all the details attached to a single user</div>
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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User info</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">USER ID</div>
                                <div class="datagrid-content">001401</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">DEVICE ID</div>
                                <div class="datagrid-content">76HGH78KJ</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">DEVICE TYPE</div>
                                <div class="datagrid-content">SAMSUNG A51</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">USER NAME</div>
                                <div class="datagrid-content">Carlson Limited</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Name</div>
                                <div class="datagrid-content">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-xs me-2 avatar-rounded" style="background-image: url({{asset('dist/static/avatars/000m.jpg')}})"></span>
                                        Paweł Kuna
                                    </div>
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">EMAIL</div>
                                <div class="datagrid-content">carlson@gmail.com</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">USER LOCATION</div>
                                <div class="datagrid-content"><span class="flag flag-country-us"></span>United States</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">ANDROID VERSION</div>
                                <div class="datagrid-content">12</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">CREATED DATE</div>
                                <div class="datagrid-content">31-05-2022 00:02AM</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title"> UPDATED DATE</div>
                                <div class="datagrid-content">31-05-2022 00:02AM</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">LAST SYNCED</div>
                                <div class="datagrid-content">15 days ago</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Status</div>
                                <div class="datagrid-content"><span class="status status-green">Active</span>
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">TOTAL DOWNLOADED CONTENT</div>
                                <div class="datagrid-content">
                                    25
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">TOTAL UPLOADED CONTENT</div>
                                <div class="datagrid-content">
                                    12
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">ACTION</div>
                                <div class="datagrid-content">
                                   <button class="btn btn-danger">DELETE THIS USER</button>
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">ACTION</div>
                                <div class="datagrid-content">
                                    <button class="btn btn-danger">BLOCK THIS USER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Downloaded uploaded and viewed content-->
              <div class="card mt-2 p-2">
                  <div class="row g-2 align-items-center">
                      <div class="col">
                          <h2 class="page-title">
                              User Content</h2>
                          <div class="text-muted mt-1">1-12 of 241 Content(SVGs)</div>
                      </div>

                      <!-- Page title actions -->
                      <div class="col-12 col-md-auto ms-auto d-print-none">
                          <div class="d-flex">
                              <div class="me-3">
                                  <div>
                                      <label class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio"
                                                 name="radios-inline"  checked>
                                          <span class="form-check-label">View All Content</span>
                                      </label>
                                      <label class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio"
                                                 name="radios-inline" >
                                          <span class="form-check-label">View Only Downloaded Content</span>
                                      </label>
                                      <label class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio"
                                                 name="radios-inline" >
                                          <span class="form-check-label">View Only Colored Content</span>
                                      </label>
                              </div>
                              </div>
                              <div class="me-3">
                                  <div class="input-icon">
                                      <input type="text" value="" class="form-control" placeholder="Search content">
                                      <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
                      </span>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
                <!-- Content list -->
                <div class="row row-cards mt-2">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm">
                            <a href="#" class="d-block"><img src="{{asset('dist/static/photos/1b73704b282a8ec6.jpg')}}" class="card-img-top"></a>
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <div class="bg-green-lt">Content Title Goes Here</div>
                                        <div class="text-muted">3 days ago</div>
                                        <div class="text-muted">Content ID: A67hnjwe75rhRt</div>
                                        <div class="text-muted">Trade Type: NONE / ADS / COIN BASED</div>
                                        <div class="text-muted">Aspect Ratio: Square 1 : 1</div>
                                        <div class="text-muted">Design Type: Contents Type 1</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                            467
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm">
                            <a href="#" class="d-block"><img src="{{asset('dist/static/photos/3d2998219313cd37.jpg')}}" class="card-img-top"></a>
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <div class="bg-green-lt">Content Title Goes Here</div>
                                        <div class="text-muted">3 days ago</div>
                                        <div class="text-muted">Content ID: A67hnjwe75rhRt</div>
                                        <div class="text-muted">Trade Type: NONE / ADS / COIN BASED</div>
                                        <div class="text-muted">Aspect Ratio: Square 1 : 1</div>
                                        <div class="text-muted">Design Type: Contents Type 1</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                            335
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm">
                            <a href="#" class="d-block"><img src="{{asset('dist/static/photos/6ab3200b14549f8a.jpg')}}" class="card-img-top"></a>
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <div class="bg-green-lt">Content Title Goes Here</div>
                                        <div class="text-muted">3 days ago</div>
                                        <div class="text-muted">Content ID: A67hnjwe75rhRt</div>
                                        <div class="text-muted">Trade Type: NONE / ADS / COIN BASED</div>
                                        <div class="text-muted">Aspect Ratio: Square 1 : 1</div>
                                        <div class="text-muted">Design Type: Contents Type 1</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                            368
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm">
                            <a href="#" class="d-block"><img src="{{asset('dist/static/photos/6d35d9a2bd6c63c2.jpg')}}" class="card-img-top"></a>
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <div class="bg-green-lt">Content Title Goes Here</div>
                                        <div class="text-muted">3 days ago</div>
                                        <div class="text-muted">Content ID: A67hnjwe75rhRt</div>
                                        <div class="text-muted">Trade Type: NONE / ADS / COIN BASED</div>
                                        <div class="text-muted">Aspect Ratio: Square 1 : 1</div>
                                        <div class="text-muted">Design Type: Contents Type 1</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                            479
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm">
                            <a href="#" class="d-block"><img src="{{asset('dist/static/photos/8a26974ee6444acd.jpg')}}" class="card-img-top"></a>
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <div class="bg-green-lt">Content Title Goes Here</div>
                                        <div class="text-muted">3 days ago</div>
                                        <div class="text-muted">Content ID: A67hnjwe75rhRt</div>
                                        <div class="text-muted">Trade Type: NONE / ADS / COIN BASED</div>
                                        <div class="text-muted">Aspect Ratio: Square 1 : 1</div>
                                        <div class="text-muted">Design Type: Contents Type 1</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                            546
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm">
                            <a href="#" class="d-block"><img src="{{asset('dist/static/photos/8c13ad59f739558c.jpg')}}" class="card-img-top"></a>
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <div class="bg-green-lt">Content Title Goes Here</div>
                                        <div class="text-muted">3 days ago</div>
                                        <div class="text-muted">Content ID: A67hnjwe75rhRt</div>
                                        <div class="text-muted">Trade Type: NONE / ADS / COIN BASED</div>
                                        <div class="text-muted">Aspect Ratio: Square 1 : 1</div>
                                        <div class="text-muted">Design Type: Contents Type 1</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                            667
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pagination -->
                <div class="d-flex mt-2">
                    <ul class="pagination ms-auto">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>
                                prev
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @include('live.includes.footer')
    </div>
</div>
<!-- Libs JS -->
@include('live.includes.bottom-scripts')</body>
</html>
