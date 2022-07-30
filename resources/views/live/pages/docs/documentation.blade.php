<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Basic Documentations</title>
    @include('live.includes.top-scripts')
</head>
<body>
<div class="page">
    @include('live.coloringbook.includes.side-menu')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="row gx-lg-5">
                    <div class="col-lg-9">
                        <div class="card card-lg">
                            <div class="card-body">
                                <div class="markdown">
                                    <div>
                                        <div class="d-flex mb-3">
                                            <h1 class="m-0">Documentation</h1>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <h2 class="mb-2">
                                            <span>Document Version 1.1.0-Beta</span> –
                                            <small>June 14, 2022</small>
                                        </h2>
                                        <h3 class="mb-2">
                                            <span>Dashboard Modules</span> –

                                        </h3>
                                        <ul>
                                            <li><a href="#">Coloring Book- Analytics Dashboard Module - (Module M1)</a></li>
                                            <li><a href="{{route('live.pages.docs.module_M2')}}">Coloring Book- Categories Modules - (Module M2)</a></li>
                                            <li><a href="{{route('live.pages.docs.module_M3')}}">Coloring Book- Home Sliders Module - (Module M3)</a></li>
                                            <li><a href="{{route('live.pages.docs.module_M4')}}">Coloring Book- Content Upload Module - (Module M4)</a></li>
                                            <li><a href="#">Coloring Book- Explore Module - (Module M5)</a></li>
                                            <li><a href="#">Coloring Book- Premium Module - (Module M6)</a></li>
                                            <li><a href="#">Coloring Book- Users Module - (Module M7)</a> </li>
                                            <li><a href="#">Coloring Book-Pallets, Effects ,Filter - (Module M8)</a></li>
                                            <li><a href="#">Coloring Book-Content Grid Module - (Module M9)</a></li>
                                        </ul>
                                    </div>

                                    <div class="mb-4">

                                        <h3 class="mb-2">
                                            <span>Modules Delivery Sequence</span> –

                                        </h3>

                                        <p>First Delivery Will be
                                        <ul>
                                            <li class="bg-green-lt">Coloring Book- Categories Modules - (Module M2)</li>
                                            <li class="bg-green-lt">Coloring Book- Home Sliders Module - (Module M3)</li>
                                            <li class="bg-green-lt">Coloring Book- Content Upload Module - (Module M4)</li>
                                            <li class="bg-green-lt">Coloring Book-Pallets, Effects ,Filter - (Module M8)</li>
                                        </ul>
                                        </p>

                                        <p>Second Delivery Will be
                                        <ul>
                                            <li class="bg-green-lt">Coloring Book- Explores Modules - (Module M5)</li>
                                        </ul>
                                        </p>

                                        <p>Third Delivery Will be
                                        <ul>
                                            <li class="bg-green-lt">Premium Module - (Module M6)</li>
                                        </ul>
                                        </p>

                                        <p>Fourth Delivery Will be
                                        <ul>
                                            <li class="bg-green-lt">Coloring Book- Users Module - (Module M7)</li>
                                        </ul>
                                        </p>

                                        <p>Fifth Delivery Will be
                                        <ul>
                                            <li class="bg-green-lt">Coloring Book- Content Grid Module - (Module M9)</li>
                                        </ul>
                                        </p>

                                        <p>Sixth Delivery Will be
                                        <ul>
                                            <li class="bg-green-lt">Coloring Book- Analytics Dashboard Module - (Module M1)</li>
                                        </ul>
                                        </p>



                                    </div>

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
@include('live.includes.bottom-scripts')
</body>
</html>