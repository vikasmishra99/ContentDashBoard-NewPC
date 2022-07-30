<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Module M2</title>
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
                                            <h1 class="m-0">Documentation - Module M2</h1>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <h2 class="mb-2">
                                            <span>Documentation for module M2 Version 1.1.0-Beta</span> –
                                            <small>June 14, 2022</small>
                                        </h2>
                                        <p>Module M2 contains following sections
                                        <ul>
                                            <li class="bg-pink-lt">Categories and related actions
                                                <ul class="bg-green-lt">
                                                    <li> Creating Categories and storing created category in
                                                        Database(DB) with unique ID
                                                    </li>
                                                    <li> Give this unique category a 'Category Title' that will be
                                                        stored in DB and this title is attached to unique category ID
                                                    </li>
                                                    <li> Give this unique category a 'Category Description' that will be
                                                        stored in DB and this description is attached to unique category
                                                        ID
                                                    </li>
                                                    <li> Option to upload thumbnail for category with a image size, type
                                                        and dimension restrictions, once uploaded this thumbnail has a
                                                        unique id and will be attached to this category and its unique
                                                        ID
                                                    </li>
                                                    <li> Option to upload circular thumbnail for category with a image
                                                        size, type and dimension restrictions, once uploaded this
                                                        circular thumbnail has a unique id and will be attached to this
                                                        category and its unique ID
                                                    </li>
                                                    <li> Option to make this category as a home slider, this will show
                                                        this category link on app home screen, once uploader set it on
                                                        while creating the category, a database flag will be set as ON
                                                        for category to be home slider, thus category with sliders have
                                                        a flag value set as 1
                                                    </li>
                                                </ul>

                                            </li>
                                        </ul>

                                        </p>

                                    </div>

                                    <div class="mb-4">
                                        <h2 class="mb-2">
                                            <span>Details we need to save for categories</span> –
                                        </h2>

                                        <p class="bg-danger-lt">These are the <b>CATEGORIES DATA</b> attributes we need
                                            to handle for our app and dashboard,<br>
                                            Note: This is not a database design, its just a reference on which type of
                                            data we will be handling for categories</p>

                                        <!-- Table reference for categories -->
                                        <div class="row row-cards">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="table-responsive">
                                                        <table class="table table-vcenter card-table">
                                                            <thead>
                                                            <tr>
                                                                <th>Category Unique ID</th>
                                                                <th>Category Created Timestamp</th>
                                                                <th>Category Updated Timestamp</th>
                                                                <th>Category Deleted Timestamp</th>
                                                                <th>Category Title ID &amp; Link</th>
                                                                <th>Category Description ID &amp; Link</th>
                                                                <th>Category Main Thumbnail ID &amp; Link</th>
                                                                <th>Category Circular Thumbnail ID &amp; Link</th>
                                                                <th>Flag Value to know if Category is a slider</th>
                                                                <th>Flag Value to know if Category is a Premium
                                                                    Category
                                                                </th>
                                                                <th>Flag Value to know if Category is a Explore
                                                                    Category
                                                                </th>
                                                                <th>Total Content Count</th>
                                                                <th class="w-1"></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="text-muted">Cat-Unique-ID</td>
                                                                <td class="text-muted">2020-01-05 16:42:29 UTC</td>
                                                                <td class="text-muted"> 2020-01-05 16:42:29 UTC</td>
                                                                <td class="text-muted">2020-01-05 16:42:29 UTC</td>
                                                                <td><a href="javascript:void(0)">Category Title ID and
                                                                        Link</a></td>
                                                                <td><a href="javascript:void(0)">Category Desc ID and
                                                                        Link</a></td>
                                                                <td><a href="javascript:void(0)">Category Main Thumb ID
                                                                        and Link</a></td>
                                                                <td><a href="javascript:void(0)">Category Circular Thumb
                                                                        ID and Link</a></td>
                                                                <td><a href="javascript:void(0)">Category is a Slider :
                                                                        1</a></td>
                                                                <td><a href="javascript:void(0)">Category is Premium
                                                                        Category : 1</a></td>
                                                                <td><a href="javascript:void(0)">Category is Explore
                                                                        Category : 1</a></td>
                                                                <td><a href="javascript:void(0)">Total Upload Content
                                                                        245</a></td>

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
                                                    <li>Category Unique ID</li>
                                                    <li> Category Created Timestamp</li>
                                                    <li>Category Updated Timestamp</li>
                                                    <li>Category Deleted Timestamp</li>
                                                    <li>Category Title ID &amp; Link
                                                    <li>Category Description ID &amp; Link</li>
                                                    <li>Category Main Thumbnail ID &amp; Link</li>
                                                    <li>Category Circular Thumbnail ID &amp; Link</li>
                                                    <li>Flag Value to know if Category is a slider</li>
                                                    <li>Flag Value to know if Category is a Premium Category</li>
                                                    <lil>Flag Value to know if Category is a Explore Category</lil>
                                                    <li>Total Content Count in Category</li>
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