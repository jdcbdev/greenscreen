<!-- Modal -->
<div class="modal fade" id="myModal-Withdrawn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View Student Application</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="needs-validation" action="" method="post" name="verify-student" id="verify-student">
                <div class="row g-3">
                    <div class="col-12 col-md-12">
                        <label for="fullname" class="form-label">Name<span class="text-muted"></span></label>
                        <input type="text" disabled="true" class="form-control" id="fullname" placeholder="" name="fullname" required="" value="Jaydee Ballaho">
                    </div>
                    <div class="col-12 col-md-12 qualified-comments">
                        <label for="exampleFormControlTextarea1" class="form-label">Reason for Withdrawing</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Would like to pursue career in Nursing</textarea>
                    </div>
                    <div class="col-12 col-md-12">
                        <label for="pqs-1" class="form-label col-12">Application Status<span class="text-muted"></span></label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="With-Moved" value="Moved to Waiting List" checked>
                            <label class="form-check-label" for="With-Moved">Moved to Waiting List</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="With-Accepted" value="Accepted">
                            <label class="form-check-label" for="With-Accepted">Accepted</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary background-color-green" id="move-submit">Update Application Status</button>
        </div>
        </div>
    </div>
</div>