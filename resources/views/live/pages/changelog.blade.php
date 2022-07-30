<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>ChangeLog - Coloring DashBoard</title>
    @include('live.includes.top-scripts')
</head>
<body >
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
                                            <h1 class="m-0">Changelog</h1>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <h2 class="mb-2">
                                            <span>1.0.0-beta8</span> –
                                            <small>February 05, 2022</small>
                                        </h2>
                                        <ul>
                                            <li>update dependencies</li>
                                            <li>new vector maps demos</li>
                                            <li>fixes update map on resize</li>
                                            <li>docs improvement</li>
                                            <li>replace <code class="language-plaintext highlighter-rouge">badge</code> with <code class="language-plaintext highlighter-rouge">status-dot</code> in <code class="language-plaintext highlighter-rouge">navbar-notifications.html</code></li>
                                            <li>map tooltip fixes</li>
                                        </ul>
                                    </div>




                                    <div class="mb-4">
                                        <h2 class="mb-2">
                                            <span>1.0.0-beta3</span> –
                                            <small>May 08, 2021</small>
                                        </h2>
                                        <ul>
                                            <li>upgrade Bootstrap to 5.0</li>
                                            <li>upgrade dependencies</li>
                                            <li>change <code class="language-plaintext highlighter-rouge">$border-radius-pill</code> variable</li>
                                            <li>badge vertical align fix</li>
                                        </ul>
                                    </div>
                                    <div class="mb-4">
                                        <h2 class="mb-2">
                                            <span>1.0.0-beta2</span> –
                                            <small>March 29, 2021</small>
                                        </h2>
                                        <ul>
                                            <li>update dependencies</li>
                                            <li><code class="language-plaintext highlighter-rouge">li</code> marker fix</li>
                                            <li>page wrapper, nav fixes</li>
                                            <li>scripts optimize, remove <code class="language-plaintext highlighter-rouge">capture_once</code></li>
                                            <li><code class="language-plaintext highlighter-rouge">page-body</code> fixes</li>
                                            <li>layout navbar fix</li>
                                            <li>typography fix</li>
                                            <li>ribbon fix</li>
                                            <li>charts label fixes</li>
                                            <li>charts docs</li>
                                        </ul>
                                    </div>
                                    <div class="mb-4">
                                        <h2 class="mb-2">
                                            <span>1.0.0-beta</span> –
                                            <small>February 17, 2021</small>
                                        </h2>
                                        <p class="strong">Initial beta release of X-Company Dashboard v1.0! Lots more coming soon though 😁</p>
                                        <ul>
                                            <li>update Bootstrap to 5.0.0-beta2</li>
                                            <li>update other dependencies.</li>
                                        </ul>
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