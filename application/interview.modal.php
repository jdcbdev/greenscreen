<!-- Modal -->
<div class="modal fade" id="myModal-Interview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rate Interview</h5>
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
                        <label for="score" class="form-label">Score (out of 100)<span class="text-muted"></span></label>
                        <input type="number" class="form-control" id="score" placeholder="" name="score" required="" value="Jaydee Ballaho">
                    </div>
                    <div class="col-12 col-md-12 interview-comments">
                        <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary background-color-green" id="pending-submit">Submit</button>
        </div>
        </div>
    </div>
</div>