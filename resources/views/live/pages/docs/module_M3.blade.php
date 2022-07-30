<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Module M3</title>
    @include('live.includes.top-scripts')
</head>
<body>
<div class="page">
    @include('live.coloringbook.includes.side-menu')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="row gx-lg-12">
                    <div class="col-lg-12">
                        <div class="card card-lg">
                            <div class="card-body">
                                <div class="markdown">
                                    <div>
                                        <div class="d-flex mb-3">
                                            <h1 class="m-0">Documentation - Module M3</h1>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <h2 class="mb-2">
                                            <span>Documentation for module M3 Version 1.1.0-Beta</span> –
                                            <small>June 14, 2022</small>
                                        </h2>
                                        <p>Module M3 contains following sections
                                        <ul>
                                            <li class="bg-pink-lt">Home Slider Related Actions
                                                <ul class="bg-green-lt">
                                                    <li> Creating Slider from categories, premium categories, explore categories
                                                    </li>
                                                    <li>We need to handle these cases,<br>
                                                        <b>if slider is made from normal categories</b><br>
                                                        <b>if slider is made from premium categories</b><br>
                                                        <b>if slider is made from explore categories</b>
                                                        <b>if slider is originally created from dashboard</b>
                                                    </li>
                                                    <li> if slider is made by attaching a normal category to sliders, in that case we need to add a flag in DB for that category also as a slider and</li>
                                                    <li> if slider is made by attaching a premium category to sliders, in that case we need to add a flag in DB for that category also as a slider and</li>
                                                    <li> if slider is made by attaching a explore category to sliders, in that case we need to add a flag in DB for that category also as a slider and</li>
                                                    <li> if slider is originally created than we need to have a slider ID, option to upload a thumb with a thumbnail ID attached to slider ID,</li>
                                                </ul>

                                            </li>
                                        </ul>

                                        </p>

                                    </div>

                                    <div class="mb-4">
                                        <h2 class="mb-2">
                                            <span>Details we need to save for sliders</span> –
                                        </h2>

                                        <p class="bg-danger-lt">These are the <b>SLIDER DATA</b> attributes we need
                                            to handle for our app and dashboard,<br>
                                            Note: This is not a database design, its just a reference on which type of
                                            data we will be handling for sliders</p>

                                        <!-- Table reference for categories -->
                                        <div class="row row-cards">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="table-responsive">
                                                        <table class="table table-vcenter card-table">
                                                            <thead>
                                                            <tr>
                                                                <th>Slider Unique ID</th>
                                                                <th>Slider Created Timestamp</th>
                                                                <th>Slider Updated Timestamp</th>
                                                                <th>Slider Deleted Timestamp</th>
                                                                <th>Slider Title ID &amp; Link</th>
                                                                <th>Slider Main Thumbnail ID &amp; Link</th>
                                                                <th>Flag Value to know if Slider belongs to a category</th>
                                                                <th>Flag Value to know if Slider belongs to a premium category</th>
                                                                <th>Flag Value to know if Slider belongs to a Explore Category</th>
                                                                <th>Flag to know if slider is originally created</th>
                                                                <th class="w-1"></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="text-muted">Slider-Unique-ID</td>
                                                                <td class="text-muted">2020-01-05 16:42:29 UTC</td>
                                                                <td class="text-muted"> 2020-01-05 16:42:29 UTC</td>
                                                                <td class="text-muted">2020-01-05 16:42:29 UTC</td>
                                                                <td><a href="javascript:void(0)">Slider Title ID and
                                                                        Link</a></td>
                                                                <td><a href="javascript:void(0)">Slider Main Thumb ID
                                                                        and Link</a></td>
                                                                <td><a href="javascript:void(0)">Slider Belongs to Category ID-abh555 :
                                                                        1</a></td>
                                                                <td><a href="javascript:void(0)">Slider Belongs to Premium ID-uhn556
                                                                        Category : 1</a></td>
                                                                <td><a href="javascript:void(0)">Slider Belongs to Explore ID-jkml665
                                                                        Category : 1</a></td>
                                                                <td><a href="javascript:void(0)">Slider is originally created</a></td>

                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="mb-4">
                                        <p>Module M2 contains following sections
                                        <ul>
                                            <li class="bg-pink-lt">We need following data to be stored and handled
                                                <ul class="bg-green-lt">
                                                    <li>Slider Unique ID</li>
                                                    <li>Slider Created Timestamp</li>
                                                    <li>Slider Updated Timestamp</li>
                                                    <li>Slider Deleted Timestamp</li>
                                                    <li>Slider Title ID &amp; Link</li>
                                                    <li>Slider Main Thumbnail ID &amp; Link</li>
                                                    <li>Flag Value to know if Slider belongs to a category</li>
                                                    <li>Flag Value to know if Slider belongs to a premium category</li>
                                                    <li>Flag Value to know if Slider belongs to a Explore Category</li>
                                                    <li>Flag to know if slider is originally createdt</li>
                                                </ul>

                                            </li>
                                        </ul>

                                        </p>

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
    </div>
@include('live.includes.bottom-scripts')
</body>
</html>