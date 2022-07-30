<div class="modal modal-blur fade" id="add-content-to-category-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Content to 'Category Title' Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- title  -->
                <div class="mb-3">
                    <label class="form-label">Content Title</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="enter content title here maxx 32 character allowed">
                </div>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <div class="form-label required">Upload Main Content File <span class="badge bg-red"> Required</span></div>
                            <input type="file" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <div class="form-label required">Upload Content Thumbnail <span class="badge bg-red"> Required</span></div>
                            <input type="file" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label">Select Trade Type</label>
                            <select type="text" class="form-select" placeholder="Select a trade type" id="select-trade-type" value="">
                                <option value="1">NONE</option>
                                <option value="2">ADS</option>
                                <option value="3">COINS</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Design Type</label>
                            <select type="text" class="form-select" placeholder="Select a trade type" id="select-trade-type" value="">
                                <option value="1">VECTOR TYPE 1</option>
                                <option value="2">VECTOR TYPE 2</option>
                                <option value="3">VECTOR TYPE 3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Aspect Ratio</label>
                            <select type="text" class="form-select" placeholder="Select a trade type" id="select-trade-type" value="">
                                <option value="1">SQUARE - 1:1</option>
                                <option value="2">PHONE_WALLPAPER - 9:16 2</option>
                                <option value="3">DESKTOP_WALLPAPER - 16:9</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label">Add Tags</label>
                            <textarea class="form-control" rows="3" placeholder="enter tags related to content"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-toggle="modal" data-bs-target="#error-alert-contnet">
                    Cancel
                </a>
                <a href="#" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#success-alert-content">
                    Add Content To This Category
                </a>
            </div>
        </div>
    </div>
</div>