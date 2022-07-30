<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Coloring Book - Dashboard SignIn</title>
    @include('live.includes.top-scripts')
</head>
<body  class=" border-top-wide border-primary d-flex flex-column">
<div class="page page-center">
    <div class="container-tight py-4">
        <div class="text-center mb-4">
            <a href="{{route('live.coloringbook.authentication.sign-in')}}" class="navbar-brand navbar-brand-autodark"><img src="{{asset('dist/static/logo.svg')}}" height="36" alt=""></a>
        </div>
        <form class="card card-md" action="#" method="get" autocomplete="off">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Coloring Book Login</h2>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter your coloring book email" autocomplete="off">
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        Password
                <span class="form-label-description">
                  <a href="{{route('live.coloringbook.authentication.forget-password')}}">Ask admin to change or reset password</a>
                </span>
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" class="form-control"  placeholder="Enter your coloring book password"  autocomplete="off">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                  </a>
                </span>
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="form-check-label">Remember me on this device</span>
                    </label>
                </div>
                <div class="form-footer">
                    <a  href="{{route('live.coloringbook.main-dashboard')}}" class="btn btn-primary w-100">Sign in to coloring book dashboard</a>
                </div>
            </div>
            <div class="hr-text">or</div>
            <div class="card-body">
                <div class="col"><a href="#" class="btn btn-white w-100">
                        Contact Admin
                    </a></div>
            </div>
        </form>
        <div class="text-center text-muted mt-3">
            Don't have coloring book account yet? <a href="#" tabindex="-1">Ask Admin for login credentials</a>
        </div>
    </div>
</div>
@include('live.includes.bottom-scripts')
</body>
</html>