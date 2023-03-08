<div class="row g-2 mb-2">
    <div class="form-group col-12 col-sm-4 table-filter-option">
        <label for="department">Department</label>
        <select name="department" id="department" class="form-select ms-md-2">
            <option value="">All</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Information Technology">Information Technology</option>
        </select>
    </div>
    <div class="form-group col-12 col-sm-4 table-filter-option">
        <label for="role" class="text-nowrap">Admission Role</label>
        <select name="role" id="role" class="form-select ms-md-2">
            <option value="">All</option>
            <option value="Admission Officer ">Admission Officer</option>
            <option value="Interviewer">Interviewer</option>
        </select>
    </div>
    <div class="form-group col-12 col-sm-4 table-filter-option">       
        <label for="keyword">Search</label>
        <input type="text" name="keyword" id="keyword" placeholder="Enter Faculty Name Here" class="form-control ms-md-2">
    </div>
</div>
<table class="table table-hover col-12" id="table-faculty">
    <thead>
        <tr>
            <th scope="col">Action</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Academic Rank</th>
            <th scope="col">Department</th>
            <th scope="col">Admission Role</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div class="action-button">
                    <a href="" class="me-2 green" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="" class="green" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
                </div>
            </td>
            <td>Ballaho, Jaydee C.</td>
            <td>jaydee.ballaho@wmsu.edu.ph</td>
            <td>Instructor</td>
            <td>Computer Science</td>
            <td>Admission Officer</td>
            <td>Active Employee</td>
        </tr>
        <tr>
            <td>
                <div class="action-button">
                    <a href="" class="me-2 green" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="" class="green" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
                </div>
            </td>
            <td>Freecs, Gon</td>
            <td>gon.freecs@wmsu.edu.ph</td>
            <td>Asst. Professor</td>
            <td>Computer Science</td>
            <td>Interviewer</td>
            <td>Active Employee</td>
        </tr>
        <tr>
            <td>
                <div class="action-button">
                    <a href="" class="me-2 green" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="" class="green" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
                </div>
            </td>
            <td>Zoldyc, Silva</td>
            <td>silva.zoldyc@wmsu.edu.ph</td>
            <td>Asso. Professor</td>
            <td>Information Technology</td>
            <td>Interviewer</td>
            <td>Active Employee</td>
        </tr>
    </tbody>
</table>