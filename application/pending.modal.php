<!-- Modal -->
<div class="modal fade" id="myModal-Verify" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Verify Student Applications</h5>
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
                        <label for="uploaded-photos" class="form-label">Uploaded Photos<span class="text-muted"></span></label>
                        <div class="photo-container row g-3">
                            <div class="col-6" href="../img/upload_files/cet.jpg">
                                <div class="photo-holder photo-1" title="Click photo to enlarge"></div>
                            </div>
                            <div class="col-6 photo-1" href="../img/upload_files/shs.jpeg">
                                <div class="photo-holder photo-2" title="Click photo to enlarge"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="comments">
                            <label class="form-check-label" for="comments">
                                With Comments
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 comments" style="display:none">
                        <label for="exampleFormControlTextarea1" class="form-label">Enter your comments below</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary background-color-green" id="pending-submit">Verify Application</button>
        </div>
        </div>
    </div>
</div>