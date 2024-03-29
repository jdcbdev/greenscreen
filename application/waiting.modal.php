<!-- Modal -->
<div class="modal fade" id="myModal-Waiting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <div class="col-12 col-md-12">
                        <label for="pqs-1" class="form-label col-12">Application Status<span class="text-muted"></span></label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="Waiting-Accepted" value="Accepted" checked>
                            <label class="form-check-label" for="Waiting-Accepted">Accepted</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="Waiting-Rejected" value="Rejected">
                            <label class="form-check-label" for="Waiting-Rejected">Rejected</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="waiting-comments">
                            <label class="form-check-label" for="waiting-comments">
                                With Comments
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 waiting-comments" style="display:none">
                        <label for="exampleFormControlTextarea1" class="form-label">Enter your comments below</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary background-color-green" id="waiting-submit">Update Application Status</button>
        </div>
        </div>
    </div>
</div>