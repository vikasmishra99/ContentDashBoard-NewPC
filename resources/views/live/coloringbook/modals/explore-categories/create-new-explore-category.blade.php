<div class="modal modal-blur fade" id="create-new-explore-category-modal" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- modal header  -->
            <div class="modal-header">
                <h5 class="modal-title">Create New Explore Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Explore Category modal requirements  -->
            <div class="modal-body">
                <!-- title  -->
                <div class="mb-3">
                    <label class="form-label">Explore Category Title</label>
                    <input type="text" class="form-control" name="example-text-input"
                           placeholder="enter explore category title here maxx 32 character allowed">
                </div>
                <!-- description  -->
                <div class="mb-3">
                    <label class="form-label">Explore Category Description</label>
                    <textarea class="form-control" rows="3"
                              placeholder="enter explore category description here maxx 150 character allowed"></textarea>
                </div>
                <!-- upload thumbnail  -->
                <div class="mb-3">
                    <div class="form-label required">Upload Main Thumbnail <span class="badge bg-red"> Required</span>
                    </div>
                    <input type="file" class="form-control"/>
                </div>
            </div>
            <!-- Explore Pack modal requirements  -->
            <div class="modal-body">
                <!-- Pack title  -->
                <div class="mb-3">
                <label class="row">
                    <span class="col bg-info-lt">You have to add at-least one pack to create explore category</span>
                </label>
                </div>

                <div class="mb-3">
                    <label class="form-label required">Pack Title <span class="badge bg-red"> Required</span></label>
                    <input type="text" class="form-control" name="example-text-input"
                           placeholder="enter pack title here maxx 32 character allowed">
                </div>
                <!-- Pack Description  -->
                <div class="mb-3">
                    <label class="form-label required">Pack Description <span class="badge bg-red"> Required</span></label>
                    <input type="text" class="form-control" name="example-text-input"
                           placeholder="enter pack description here maxx 32 character allowed">
                </div>
                <!-- upload pack thumbnail  -->
                <div class="mb-3">
                    <div class="form-label required">Upload Pack Thumbnail <span class="badge bg-red"> Required</span>
                    </div>
                    <input type="file" class="form-control"/>
                </div>




            </div>
            <!-- Explore Slider attachment modal  -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div>
                                <label class="row">
                                    <span class="col bg-pink-lt">Attach this explore category and its packs to home slider</span>
                                  <span class="col-auto">
                                    <label class="form-check form-check-single form-switch">
                                        <input class="form-check-input" type="checkbox" checked>
                                    </label>
                                  </span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-label required">Upload Slider Thumbnail <span class="badge bg-red"> Required</span>
                            </div>
                            <input type="file" class="form-control"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Explore Category modal footer  -->
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-toggle="modal" data-bs-target="#error-alert">
                    Cancel
                </a>
                <a href="#" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#success-alert">
                    Create Explore Category
                </a>
            </div>
        </div>
    </div>
</div>