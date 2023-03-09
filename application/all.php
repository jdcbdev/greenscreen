<div class="row g-2 mb-2">
    <div class="form-group col-12 col-sm-4 table-filter-option">
        <label for="student_type">Type</label>
        <select name="student_type" id="student_type" class="form-select ms-md-2">
            <option value="">All</option>
            <option value="New Student">New Student</option>
            <option value="Shiftee">Shiftee</option>
            <option value="Transferee">Transferee</option>
        </select>
    </div>
    <div class="form-group col-12 col-sm-3 table-filter-option">
        <label for="program">Program</label>
        <select name="program" id="program" class="form-select ms-md-2">
            <option value="">All</option>
            <option value="BSCS">BSCS</option>
            <option value="BSIT">BSIT</option>
        </select>
    </div>
    <div class="form-group col-12 col-sm-5 table-filter-option">       
        <label for="keyword">Search</label>
        <input type="text" name="keyword" id="keyword" placeholder="Enter Student Name Here" class="form-control ms-md-2">
    </div>
</div>
<table class="table table-hover col-12" id="table-all">
    <thead>
        <tr>
            <th scope="col">Action</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Program</th>
            <th scope="col">CET OAPR</th>
            <th scope="col">SHS GPA</th>
            <th scope="col">Email Address</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div class="action-button">
                    <a href="" class="me-2 green"><i class="fa-solid fa-user-pen"></i></a>
                </div>
            </td>
            <td>Ballaho, Jaydee C.</td>
            <td>New Student</td>
            <td>BSCS</td>
            <td>92.56</td>
            <td>91.5</td>
            <td>jaydee.ballaho@wmsu.edu.ph</td>
            <td>0965-649-9005</td>
            <td>Qualified</td>
        </tr>
        <tr>
            <td>
                <div class="action-button">
                    <a href="" class="me-2 green"><i class="fa-solid fa-user-pen"></i></a>
                </div>
            </td>
            <td>Freecs, Gon.</td>
            <td>New Student</td>
            <td>BSIT</td>
            <td>89.16</td>
            <td>94.5</td>
            <td>gon@wmsu.edu.ph</td>
            <td>0965-649-9006</td>
            <td>Pending</td>
        </tr>
        <tr>
            <td>
                <div class="action-button">
                    <a href="" class="me-2 green"><i class="fa-solid fa-user-pen"></i></a>
                </div>
            </td>
            <td>Scarlet, Erza</td>
            <td>Shiftee</td>
            <td>BSCS</td>
            <td>74.90</td>
            <td>96</td>
            <td>es@wmsu.edu.ph</td>
            <td>0965-649-9007</td>
            <td>For Interview</td>
        </tr>
        <tr>
            <td>
                <div class="action-button">
                    <a href="" class="me-2 green"><i class="fa-solid fa-user-pen"></i></a>
                </div>
            </td>
            <td>Zoldyc, Killua</td>
            <td>Shiftee</td>
            <td>BSCS</td>
            <td>95.70</td>
            <td>94</td>
            <td>kill@wmsu.edu.ph</td>
            <td>0965-649-9008</td>
            <td>For Ranking</td>
        </tr>
    </tbody>
</table>