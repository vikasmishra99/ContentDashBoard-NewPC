<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Module M4</title>
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
                                            <h1 class="m-0">Documentation - Module M4</h1>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <h2 class="mb-2">
                                            <span>Documentation for module M4 Version 1.1.0-Beta</span> –
                                            <small>June 14, 2022</small>
                                        </h2>
                                        <p>Module M4 contains following sections
                                        <ul>
                                            <li class="bg-pink-lt">Content and related actions
                                                <ul class="bg-green-lt">
                                                    <li> Uploading Content and storing created content in
                                                        Database(DB) with unique ID and relate it with its Unique category to which it belongs
                                                    </li>
                                                    <li> Give this unique content a 'Content Title' that will be
                                                        stored in DB and this title is attached to unique category ID &amp; content ID
                                                    </li>
                                                    <li> Option to upload thumbnail for content with a image size, type
                                                        and dimension restrictions, once uploaded this thumbnail has a
                                                        unique id and will be attached to this category and its unique
                                                        ID
                                                    </li>
                                                    <li> Option to set content type and this content type will be stored in DB<br>
                                                        1- NONE - It means it is free and this will set a value in DB<br>
                                                        2- ADS - It means that to use this content u have to watch a ad and this will set a value in DB<br>
                                                        3- COIN or PAID - It means that to use this content u have to pay some amount and this will set a value in DB
                                                    </li>
                                                    <li> Option to set content design type and this content design type will be stored in DB<br>
                                                        details will be shared when we start working
                                                    </li>
                                                    <li> Option to set content aspect ratio type and this content aspect ration type will be stored in DB<br>
                                                        details will be shared when we start working
                                                    </li>
                                                    <li> Option to add some tags to content for easy search
                                                    </li>
                                                </ul>

                                            </li>
                                        </ul>

                                        </p>

                                    </div>

                                    <div class="mb-4">
                                        <h2 class="mb-2">
                                            <span>Details we need to save for content</span> –
                                        </h2>

                                        <p class="bg-danger-lt">These are the <b>CONTENT DATA</b> attributes we need
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
                                                                <th>Content Unique ID</th>
                                                                <th>Content Attached to Category ID</th>
                                                                <th>Content Created Timestamp</th>
                                                                <th>Content Updated Timestamp</th>
                                                                <th>Content Deleted Timestamp</th>
                                                                <th>Content Title ID &amp; Link</th>
                                                                <th>Content Main Thumbnail ID &amp; Link</th>
                                                                <th>Content Type </th>
                                                                <th>Content Aspect Ratio</th>
                                                                <th>Content Design Type</th>
                                                                <th>Content View Count</th>
                                                                <th>Content Download Count</th>
                                                                <th>Category ID,if content moved to other category</th>
                                                                <th>Category IDs if Content is copied to other categories</th>
                                                                <th>Content Moved to other categories Timestamp</th>
                                                                <th>Content Copied to other categories Timestamp</th>
                                                                <th>Content Tag IDs</th>

                                                                <th class="w-1"></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="text-muted">Content-Unique-ID</td>
                                                                <td class="text-muted">Content-Category-Unique-ID</td>
                                                                <td class="text-muted">2020-01-05 16:42:29 UTC</td>
                                                                <td class="text-muted"> 2020-01-05 16:42:29 UTC</td>
                                                                <td class="text-muted">2020-01-05 16:42:29 UTC</td>
                                                                <td><a href="javascript:void(0)">Content Title ID and
                                                                        Link</a></td>
                                                                <td><a href="javascript:void(0)">Category Main Thumb ID
                                                                        and Link</a></td>
                                                                <td class="text-muted">Content-type</td>
                                                                <td class="text-muted">Content-Aspect Ration Type</td>
                                                                <td class="text-muted">Content-Design-Type</td>
                                                                <td class="text-muted">Content-View-Count</td>
                                                                <td class="text-muted">Content-Download-Count</td>
                                                                <td class="text-muted">Moved Category ID</td>
                                                                <td class="text-muted">Copied Category ID</td>
                                                                <td class="text-muted">2020-01-05 16:42:29 UTC</td>
                                                                <td class="text-muted">2020-01-05 16:42:29 UTC</td>
                                                                <td class="text-muted">Tag IDS</td>

                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="mb-4">
                                        <p>Module M4 contains following sections
                                        <ul>
                                            <li class="bg-pink-lt">We need following data to be stored and handled
                                                <ul class="bg-green-lt">
                                                    <li>Content Unique ID</li>
                                                    <li>Content Attached to Category ID</li>
                                                    <li>Content Created Timestamp</li>
                                                    <li>Content Updated Timestamp</li>
                                                    <li>Content Deleted Timestamp</li>
                                                    <li>Content Title ID &amp; Link</li>
                                                    <li>Content Main Thumbnail ID &amp; Link</li>
                                                    <li>Content Type </li>
                                                    <li>Content Aspect Ratio</li>
                                                    <li>Content Design Type</li>
                                                    <li>Content View Count</li>
                                                    <li>Content Download Count</li>
                                                    <li>Category ID,if content moved to other category</li>
                                                    <li>Category IDs if Content is copied to other categories</li>
                                                    <li>Content Moved to other categories Timestamp</li>
                                                    <li>Content Copied to other categories Timestamp</li>
                                                    <li>Content Tag IDs</li>

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