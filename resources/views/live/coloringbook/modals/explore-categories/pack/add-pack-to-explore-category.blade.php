<div class="modal modal-blur fade" id="add-pack-to-explore-category-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Pack to 'Explore Category Title' Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- title  -->
                <div class="mb-3">
                    <label class="form-label">Pack Title</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="enter pack title here maxx 32 character allowed">
                </div>

                <!-- Description  -->
                <div class="mb-3">
                    <label class="form-label">Pack Description</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="enter pack description here maxx 32 character allowed">
                </div>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div class="form-label required">Upload Pack Thumbnail <span class="badge bg-red"> Required</span></div>
                            <input type="file" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-toggle="modal" data-bs-target="#error-alert-contnet">
                    Cancel
                </a>
                <a href="#" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#success-alert-content">
                    Add Pack To This Explore Category
                </a>
            </div>
        </div>
    </div>
</div>