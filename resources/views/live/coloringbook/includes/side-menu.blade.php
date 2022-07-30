<!-- Coloring Book Side Main Menu -->
<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark">
                <a href="{{route('live.coloringbook.main-dashboard')}}">
                    <img src="{{asset('dist/static/logo-white.svg')}}" width="110" height="32" alt="side-menu" class="navbar-brand-image">
                </a>
            </h1>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="navbar-nav pt-lg-3">
                    <li class="nav-item"><a class="nav-link" href="{{route('live.coloringbook.main-dashboard')}}" ><span class="nav-link-title">Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('live.coloringbook.dashboard.categories')}}" ><span class="nav-link-title">Categories</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" ><span class="nav-link-title">Content Grid</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('live.coloringbook.dashboard.explore.explore-categories')}}" ><span class="nav-link-title">Explore Categories</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('live.coloringbook.dashboard.premium.categories')}}" ><span class="nav-link-title">Premium Categories</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('live.coloringbook.dashboard.home-sliders')}}" ><span class="nav-link-title">Home Sliders</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('live.coloringbook.users.synced-users')}}" ><span class="nav-link-title">Users</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('live.coloringbook.users.reported-content')}}" ><span class="nav-link-title">Reported Content</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('live.coloringbook.users.blocked-users')}}" ><span class="nav-link-title">Blocked Users</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('live.coloringbook.users.deleted-users')}}" ><span class="nav-link-title">Deleted Users</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" ><span class="nav-link-title">Feedback</span></a></li>
                    <div class="hr-text text-google">Other Options</div>
                    <li class="nav-item "><a class="nav-link" href="#" ><span class="nav-link-title">Color Pallet Dashboard</span></a></li>
                    <li class="nav-item "><a class="nav-link" href="#" ><span class="nav-link-title">Coloring Book Effects</span></a></li>
                    <li class="nav-item "><a class="nav-link" href="#" ><span class="nav-link-title">Coloring Book Filters</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('live.pages.changelog')}}" ><span class="nav-link-title">Change Log</span></a></li>
                    <li class="nav-item "><a class="nav-link" href="#" ><span class="btn btn-danger">CLEAR CACHE</span></a></li>

                </ul>

            </div>
        </div>
    </aside>














