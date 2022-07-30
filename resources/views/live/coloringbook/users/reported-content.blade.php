<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Coloring Book - Reported Content </title>
    @include('live.includes.top-scripts')
</head>
<body>
<div class="page">
    @include('live.coloringbook.includes.side-menu')
    <div class="page-wrapper">
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Coloring Book - Reported Content By Users
                        </h2>

                        <div class="page-pretitle">
                           Content Reported By Loged In Users</span>
                        </div>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-md-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <span class="d-none d-sm-inline"><a
                                        href="{{route('live.coloringbook.authentication.sign-in')}}"
                                        class="btn btn-white" data-bs-toggle="modal"
                                        data-bs-target="#logout-modal">Logout</a></span>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Reported Content</h3>
                            </div>
                            <div class="card-body border-bottom py-3">
                                <div class="d-flex">
                                    <div class="text-muted">
                                        Show
                                        <div class="mx-2 d-inline-block">
                                            <input type="text" class="form-control form-control-sm" value="8" size="3"
                                                   aria-label="Invoices count">
                                        </div>
                                        entries
                                    </div>
                                    <div class="ms-auto text-muted">
                                        Search:
                                        <div class="ms-2 d-inline-block">
                                            <input type="text" class="form-control form-control-sm"
                                                   aria-label="Search invoice">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap datatable">
                                    <thead>
                                    <tr>
                                        {{--<th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                                               aria-label="Select all invoices"></th>--}}
                                        <th class="w-1">Content ID</th>
                                        <th>Reported By</th>
                                        <th>Reported Email ID</th>
                                        <th>Reported Date &amp; Time</th>
                                        <th>Content Link</th>
                                        <th>Reported Reason</th>
                                        <th>Status</th>
                                        <th>User Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td><span class="text-muted">001401</span></td>
                                        <td>Carlson Limited</td>
                                        <td>carlson@gmail.com</td>
                                        <td><span class="badge bg-success me-1"></span> 31-05-2022 00:02AM</td>
                                        <td><a href="#">View Content</a></td>
                                        <td>Design is misleading</td>
                                        <td><span class="badge bg-warning me-1"></span> Pending</td>
                                        <td class="text-end"><span class="dropdown"><button
                                                        class="btn dropdown-toggle align-text-top"
                                                        data-bs-boundary="viewport"
                                                        data-bs-toggle="dropdown">Actions
                                                </button>
                              <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#" data-bs-target="#delete-user-alert" data-bs-toggle="modal">
                                      Delete User
                                  </a>
                                  <a class="dropdown-item" href="#" data-bs-target="#block-user-alert" data-bs-toggle="modal">
                                      Block User
                                  </a>
                              </div>
                            </span>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td><span class="text-muted">001401</span></td>
                                        <td>Carlson Limited</td>
                                        <td>carlson@gmail.com</td>
                                        <td><span class="badge bg-success me-1"></span> 31-05-2022 00:02AM</td>
                                        <td><a href="#">View Content</a></td>
                                        <td>Design is misleading</td>
                                        <td><span class="badge bg-success me-1"></span> Resolved</td>
                                        <td class="text-end"><span class="dropdown"><button
                                                        class="btn dropdown-toggle align-text-top"
                                                        data-bs-boundary="viewport"
                                                        data-bs-toggle="dropdown">Actions
                                                </button>
                              <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#" data-bs-target="#delete-user-alert" data-bs-toggle="modal">
                                      Delete User
                                  </a>
                                  <a class="dropdown-item" href="#" data-bs-target="#block-user-alert" data-bs-toggle="modal">
                                      Block User
                                  </a>
                              </div>
                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><span class="text-muted">001401</span></td>
                                        <td>Carlson Limited</td>
                                        <td>carlson@gmail.com</td>
                                        <td><span class="badge bg-success me-1"></span> 31-05-2022 00:02AM</td>
                                        <td><a href="#">View Content</a></td>
                                        <td>Design is misleading</td>
                                        <td><span class="badge bg-danger me-1"></span> Overdue</td>
                                        <td class="text-end"><span class="dropdown"><button
                                                        class="btn dropdown-toggle align-text-top"
                                                        data-bs-boundary="viewport"
                                                        data-bs-toggle="dropdown">Actions
                                                </button>
                              <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="#" data-bs-target="#delete-user-alert" data-bs-toggle="modal">
                                     Close Report
                                  </a>
                                  <a class="dropdown-item" href="#" data-bs-target="#block-user-alert" data-bs-toggle="modal">
                                      Block User
                                  </a>
                              </div>
                            </span>
                                        </td>
                                    </tr>




                                    </tbody>
                                </table>

                                <div class="card-footer d-flex align-items-center">
                                    <p class="m-0 text-muted">Showing <span>1</span> to <span>2</span> of
                                        <span>16</span> entries</p>
                                    <ul class="pagination m-0 ms-auto">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                     height="24" viewBox="0 0 24 24" stroke-width="2"
                                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <polyline points="15 6 9 12 15 18"/>
                                                </svg>
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
                                                next
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                     height="24" viewBox="0 0 24 24" stroke-width="2"
                                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <polyline points="9 6 15 12 9 18"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
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
@include('live.coloringbook.modals.users.delete-user-alert')
@include('live.coloringbook.modals.users.block-user-alert')

@include('live.includes.bottom-scripts')
</body>
</html>