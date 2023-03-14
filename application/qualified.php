<div class="row g-2 mb-2 ">
    <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
    <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0 ms-lg-auto">
        <select name="student_type" id="student_type" class="form-select me-md-2">
            <option value="">All Type</option>
            <option value="New Student">New Student</option>
            <option value="Shiftee">Shiftee</option>
            <option value="Transferee">Transferee</option>
        </select>
    </div>
    <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0">
        <select name="program" id="program" class="form-select me-md-2">
            <option value="">All Program</option>
            <option value="BSCS">BSCS</option>
            <option value="BSIT">BSIT</option>
        </select>
    </div>
    <div class="input-group search-keyword col-12 flex-lg-grow-1">
        <input type="text" name="keyword" id="keyword" placeholder="Search Student" class="form-control">
        <button class="btn btn-outline-secondary background-color-green" type="button"><i class="fas fa-search white"></i></button>
    </div>
</div>
<table class="table table-hover responsive" id="table-qualified">
    <thead>
        <tr>
            <th scope="col">Action</th>
            <th scope="col">Rank No.</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Program</th>
            <th scope="col">CET OAPR</th>
            <th scope="col">SHS GPA</th>
            <th scope="col">Interview Score</th>
            <th scope="col">Prediction</th>
            <th scope="col">Email Address</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div class="action-button">
                    <a title="View Application" href="" class="me-2 green" data-bs-toggle="modal" data-bs-target="#myModal-qualified"><i class="fa-solid fa-user-check"></i></a>
                    <a title="View Profile" href="" class="me-2 green"><i class="fa-solid fa-eye"></i></a>
                </div>
            </td>
            <td><i class="fa-solid fa-trophy me-2 green"> 1</i></td>
            <td>Ballaho, Jaydee C.</td>
            <td>New Student</td>
            <td>BSCS</td>
            <td>92.56</td>
            <td>91.5</td>
            <td>100</td>
            <td><span class="table-successful">Successful</span></td>
            <td>jaydee.ballaho@wmsu.edu.ph</td>
            <td>0965-649-9005</td>
            <td>Pending Confirmation</td>
        </tr>
        <tr>
            <td>
                <div class="action-button">
                    <a title="View Application" href="" class="me-2 green" data-bs-toggle="modal" data-bs-target="#myModal-qualified"><i class="fa-solid fa-user-check"></i></a>
                    <a title="View Profile" href="" class="me-2 green"><i class="fa-solid fa-eye"></i></a>
                </div>
            </td>
            <td><i class="fa-solid fa-trophy me-2 green"> 2</i></td>
            <td>Freecs, Gon.</td>
            <td>New Student</td>
            <td>BSIT</td>
            <td>89.16</td>
            <td>94.5</td>
            <td>90</td>
            <td><span class="table-successful">Successful</span></td>
            <td>gon@wmsu.edu.ph</td>
            <td>0965-649-9006</td>
            <td>Confirmed Enrollment</td>
        </tr>
        <tr>
            <td>
                <div class="action-button">
                    <a title="View Application" href="" class="me-2 green" data-bs-toggle="modal" data-bs-target="#myModal-qualified"><i class="fa-solid fa-user-check"></i></a>
                    <a title="View Profile" href="" class="me-2 green"><i class="fa-solid fa-eye"></i></a>
                </div>
            </td>
            <td><i class="fa-solid fa-trophy me-2 green"> 3</i></td>
            <td>Scarlet, Erza</td>
            <td>Shiftee</td>
            <td>BSCS</td>
            <td>74.90</td>
            <td>96</td>
            <td>90</td>
            <td><span class="table-struggling">Struggling</span></td>
            <td>es@wmsu.edu.ph</td>
            <td>0965-649-9007</td>
            <td>Confirmed Enrollment</td>
        </tr>
        <tr>
            <td>
                <div class="action-button">
                    <a title="View Application" href="" class="me-2 green" data-bs-toggle="modal" data-bs-target="#myModal-qualified"><i class="fa-solid fa-user-check"></i></a>
                    <a title="View Profile" href="" class="me-2 green"><i class="fa-solid fa-eye"></i></a>
                </div>
            </td>
            <td><i class="fa-solid fa-trophy me-2 green"> 4</i></td>
            <td>Zoldyc, Killua</td>
            <td>Shiftee</td>
            <td>BSCS</td>
            <td>95.70</td>
            <td>94</td>
            <td>95</td>
            <td><span class="table-successful">Successful</span></td>
            <td>kill@wmsu.edu.ph</td>
            <td>0965-649-9008</td>
            <td>Confirmed Enrollment</td>
        </tr>
    </tbody>
</table>