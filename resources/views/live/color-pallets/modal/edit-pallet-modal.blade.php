<div class="modal modal-blur fade" id="edit-pallet-modal-items" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit or Update Color Pallet for Coloring Book Color Pallet Set</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- title  -->
                <div class="mb-3">
                    <label class="form-label">Edit Color Pallet Title</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Enter color pallet title. For eg 'RED','Red' or any other suitable title ">
                </div>

            </div>


            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label">Select Pallet Trade Type</label>
                            <select type="text" class="form-select" placeholder="Select a trade type" id="select-trade-type" value="">
                                <option value="1">Enter Price</option>
                                <option value="2">ADS</option>
                                <option value="2">COIN</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Enter Price (INR) for this pallet</label>
                            <input type="text" class="form-control" name="example-required-input" placeholder="Enter Price for this pallet...">
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label">Enter color code for header</label>
                            <textarea class="form-control" rows="3" placeholder="enter or paste color code here including #"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-toggle="modal" data-bs-target="#error-alert-contnet">
                    Cancel
                </a>
                <a href="#" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#success-alert-content">
                  Update Pallet
                </a>
            </div>
        </div>
    </div>
</div>
