<div class="modal modal-blur fade" id="delete-filter-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-danger"></div>
            <div class="modal-body text-center py-4">

                <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24"
                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 9v2m0 4v.01"/>
                    <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75"/>
                </svg>
                <h3>Are you sure?</h3>

                <div class="text-muted">Do you really want to delete this filter from list. This action can not be undone. <b>Once
                        deleted you will lose this filter </b> and it's related data as-well.
                </div>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">
                        <div class="col"><a href="javascript:void(0)" class="btn w-100" data-bs-dismiss="modal">
                                Cancel
                            </a></div>
                        <div class="col"><a href="javascript:void(0)" class="btn btn-danger w-100"
                                            data-bs-dismiss="modal">
                                Delete Filter
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
