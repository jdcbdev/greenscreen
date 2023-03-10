<!-- Modal -->
<div class="modal fade" id="myModal-qualified" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input class="form-check-input" type="radio" name="status" id="Confirmed" value="Confirmed" checked>
                            <label class="form-check-label" for="Confirmed">Confirmed Enrollment</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="Withdrawn" value="Withdrawn">
                            <label class="form-check-label" for="Withdrawn">Withdrawn</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 documents">
                        <label for="documents" class="form-label col-12">Documentary Requirements (Hardcopy)<span class="text-muted"></span></label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="CET Report of Rating" name="cet" id="cet">
                            <label class="form-check-label" for="cet">
                                CET Report of Rating (1 Original 1 Photocopy)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="SHS Report Card/Form 138" name="shscard" id="shscard">
                            <label class="form-check-label" for="shscard">
                                SHS Report Card/Form 138 (1 Original 1 Photocopy)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Live Birth Certificate" name="livebirth" id="livebirth">
                            <label class="form-check-label" for="livebirth">
                               Live Birth Certificate (2 Photocopy)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Medical Certificate" name="medcert" id="medcert">
                            <label class="form-check-label" for="medcert">
                               Medical Certificate (2 Photocopy)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2x2 Photo" name="photo" id="photo">
                            <label class="form-check-label" for="photo">
                                2x2 Photo (4pcs)
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="qualified-comments">
                            <label class="form-check-label" for="qualified-comments">
                                With Comments
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 qualified-comments" style="display:none">
                        <label for="exampleFormControlTextarea1" class="form-label">Enter your comments below</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary background-color-green" id="qualified-submit">Update Admission Status</button>
        </div>
        </div>
    </div>
</div>