<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Profile Settings</title>
    @include('live.includes.top-scripts')
</head>
<body >
<div class="page">
    @include('live.includes.top-navigation-header')
    <div class="page-wrapper">
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Profile Settings
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="row g-0">
                        <div class="col d-flex flex-column">
                            <div class="card-body">
                                <h2 class="mb-4">Account</h2>
                                <h3 class="card-title">Profile Details</h3>
                                <div class="row align-items-center">
                                    <div class="col-auto"><span class="avatar avatar-xl" style="background-image: url({{asset('dist/static/profile_img.svg')}})"></span>
                                    </div>
                                    <div class="col-auto"><a href="#" class="btn" data-bs-toggle="modal"
                                                             data-bs-target="#change-profile-avatar">
                                            Change avatar
                                        </a></div>
                                    <div class="col-auto"><a href="#" class="btn btn-ghost-danger" data-bs-toggle="modal"
                                                             data-bs-target="#delete-avatar">
                                            Delete avatar
                                        </a></div>
                                </div>
                                <h3 class="card-title mt-4">Business Profile</h3>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <div class="form-label">Business Name</div>
                                        <input type="text" class="form-control" value="NextLeap Technologies">
                                    </div>
                                    <div class="col-md">
                                        <div class="form-label">Business ID</div>
                                        <input type="text" class="form-control" value="560afc32">
                                    </div>
                                    <div class="col-md">
                                        <div class="form-label">Location</div>
                                        <input type="text" class="form-control"
                                               value="Lucknow, Uttar Pradesh">
                                    </div>
                                </div>
                                <h3 class="card-title mt-4">Email</h3>
                                <p class="card-subtitle">This contact will be shown to others publicly, so choose it carefully.</p>
                                <div>
                                    <div class="row g-2">
                                        <div class="col-auto">
                                            <input type="text" class="form-control w-auto" value="paweluna@howstuffworks.com">
                                        </div>
                                        <div class="col-auto"><a href="#" class="btn" data-bs-toggle="modal"
                                                                 data-bs-target="#change-admin-email">
                                                Change
                                            </a></div>
                                    </div>
                                </div>
                                <h3 class="card-title mt-4">Password</h3>
                                <p class="card-subtitle">You can set a permanent password if you don't want to use temporary login codes.</p>
                                <div>
                                    <a href="#" class="btn" data-bs-toggle="modal"
                                       data-bs-target="#change-admin-password">
                                        Set new password
                                    </a>
                                </div>

                            </div>
                            <div class="card-footer bg-transparent mt-auto">
                                <div class="btn-list justify-content-end">
                                    <a href="#" class="btn">
                                        Cancel
                                    </a>
                                    <a href="#" class="btn btn-primary">
                                        Submit
                                    </a>
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
@include('live.pages.modal.change-profile-avatar')
@include('live.pages.modal.delete-avatar')
@include('live.pages.modal.change-admin-email')
@include('live.pages.modal.change-admin-password')
@include('live.includes.bottom-scripts')</body>
</html>
