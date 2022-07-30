<div class="modal modal-blur fade" id="edit-explore-category-details-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Explore Category Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- title  -->
                <div class="mb-3">
                    <label class="form-label">Edit Explore Category Title</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="enter new category title that you want to update here maxx 32 character allowed">
                </div>
                <!-- description  -->
                <div class="mb-3">
                    <label class="form-label">Edit Explore Category Description</label>
                    <textarea class="form-control" rows="3" placeholder="enter new category description that you want to update here maxx 150 character allowed"></textarea>
                </div>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div class="form-label ">Upload New Main Thumbnail <span class="badge bg-cyan"> Optional</span></div>
                            <input type="file" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div>
                                <label class="row">
                                    <span class="col bg-pink-lt">Attach this explore category to home slider</span>
                                  <span class="col-auto">
                                    <label class="form-check form-check-single form-switch">
                                        <input class="form-check-input" type="checkbox" checked>
                                    </label>
                                  </span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-label required">Upload New Slider Thumbnail <span class="badge bg-red"> Required</span></div>
                            <input type="file" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-toggle="modal" data-bs-target="#error-alert">
                    Cancel this Update
                </a>
                <a href="#" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#success-alert">
                    Update Explore Category
                </a>
            </div>
        </div>
    </div>
</div>