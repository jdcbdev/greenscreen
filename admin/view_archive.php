<div class="row g-2 mb-2 ">
    <div id="MyButtons" class="d-flex mb-md-2 mb-lg-0 col-12 col-md-auto"></div>
    <div class="form-group col-12 col-sm-auto flex-sm-grow-1 flex-lg-grow-0 ms-lg-auto">
        <select name="student_type" id="student_type" class="form-select me-md-2">
            <option value="">School Year</option>
            <option value="2020-2021">2020-2021</option>
            <option value="2021-2022">2021-2022</option>
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
<table class="table table-hover responsive" id="table-faculty">
    <thead>
        <tr>
            <th scope="col">Action</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Program</th>
            <th scope="col">Admission Year</th>
            <th scope="col">Prediction</th>
            <th scope="col">Actual Result</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div class="action-button">
                    <a title="View Application" href="" class="me-2 green" data-bs-toggle="modal" data-bs-target="#myModal-qualified"><i class="fa-solid fa-user-check"></i></a>
                    <a href="" class="green" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
                </div>
            </td>
            <td>Ballaho, Jaydee C.</td>
            <td>jaydee.ballaho@wmsu.edu.ph</td>
            <td>BSCS</td>
            <td>2021-2022</td>
            <td>Successful</td>
            <td>Successful</td>
        </tr>
        <tr>
        <td>
            <div class="action-button">
                <a title="View Application" href="#" class="me-2 green" data-bs-toggle="modal" data-bs-target="#myModal-qualified"><i class="fa-solid fa-user-check"></i></a>
                <a title="Delete Application" href="#" class="green"><i class="fa-solid fa-trash-can"></i></a>
            </div>
        </td>
        <td>Jones, John</td>
        <td>john.jones@example.com</td>
        <td>BSCS</td>
        <td>2022-2023</td>
        <td>Successful</td>
        <td>Struggle</td>
        </tr>
        <tr>
            <td>
                <div class="action-button">
                    <a title="View Application" href="#" class="me-2 green" data-bs-toggle="modal" data-bs-target="#myModal-qualified"><i class="fa-solid fa-user-check"></i></a>
                    <a title="Delete Application" href="#" class="green"><i class="fa-solid fa-trash-can"></i></a>
                </div>
            </td>
            <td>Zoldyc, Silva</td>
            <td>silva.zoldyc@wmsu.edu.ph</td>
            <td>BSIT</td>
            <td>2021-2022</td>
            <td>Struggle</td>
            <td>Struggle</td>
        </tr>
    </tbody>
</table>