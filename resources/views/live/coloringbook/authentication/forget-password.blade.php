<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>NextLeap Technologies - Dashboard Forget Password</title>
    @include('live.includes.top-scripts')
</head>
<body  class=" border-top-wide border-primary d-flex flex-column">
<div class="page page-center">
    <div class="container-tight py-4">
        <div class="text-center mb-4">
            <a href="{{route('live.coloringbook.authentication.forget-password')}}" class="navbar-brand navbar-brand-autodark"><img src="{{asset('dist/static/logo.svg')}}" height="36" alt=""></a>
        </div>
        <form class="card card-md" action="." method="get">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Forgot Coloring Book Password</h2>
                <p class="text-muted mb-4">Enter your coloring book email address and your password will be reset and emailed to you.</p>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter your coloring book email">
                </div>
                <div class="form-footer">
                    <a href="#" class="btn btn-primary w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="2" /><polyline points="3 7 12 13 21 7" /></svg>
                        Send me new password
                    </a>
                </div>
            </div>
        </form>
        <div class="text-center text-muted mt-3">
            Forget it, <a href="{{route('live.coloringbook.authentication.sign-in')}}">send me back</a> to the sign in screen.
        </div>
    </div>
</div>
@include('live.includes.bottom-scripts')
</body>
</html>
