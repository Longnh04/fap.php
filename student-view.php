<?php include("dbcon.php"); ?>
<?php include("header.php"); ?>

<div class="div-main-right-big">
    <div class="nav-main">
        <a href="#aboutus">About Us</a> |
        <a href="#course">Courses Offered</a> |
        <a href="#contactus">Help</a>

        <div class="div-account">
            <a href="#"><i class="fa-solid fa-bell"></i></a>
            <a href="#"><img src="./imgs/username.svg" alt="username"></a>
        </div>
    </div>
    <div class="div-card-right-cover">
        <!-- Bây giờ tôi sẽ tạo một div lớn card để có thể chứa những thông tin đó -->
        <div class="div-card-main">
            <div class="div-card-main-header">
                <h2>Student Information</h2>
                <a href="./student-add.php"><button class="btn-add-new-student" type="button" id="btn-add-new-student" function="Addstudent">Add a new
                        student</button></a>
            </div>
            <div class="div-search">
                <input class="input" id="input1" type="text" placeholder="Student name">
                <input class="input" id="input2" type="text" placeholder="Class">
                <input class="input" id="input3" type="text" placeholder="Specialization">
                <button class="btn-search" onclick="Search()">Search</button>
                <button class="btn-reset" onclick="ResetInputs()">Reset</button>
            </div>

            <div class="div-student-infor">

                <table>
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Date of Birth</th>
                            <th>Class</th>
                            <th>Specialization</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "select * from `students`";
                        $result = mysqli_query($connection, $query);
                        if (!$result) {
                            die("query failed" . mysqli_error($connection));
                        } else {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['student_id']; ?></td>
                                    <td><?php echo $row['student_name']; ?></td>
                                    <td><?php echo $row['date_of_birth']; ?></td>
                                    <td><?php echo $row['class']; ?></td>
                                    <td><?php echo $row['specialization']; ?></td>
                                    <td>
                                        <div class="div-td-flex">
                                            <div class="div-td-items" id="view-student"><a href="student-more.php?no=<?php echo $row['no']; ?>"><i class="fa-solid fa-eye" onclick="document.getElementById('id01').style.display='block'"></i></a></div>
                                            <div class="div-td-items" id="change-student"><a href="student-update.php?no=<?php echo $row['no']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></div>
                                            <div class="div-td-items" id="delete-student"><a href="student-delete.php?no=<?php echo $row['no']; ?>"><i class="fa-solid fa-trash"></i></a></div>
                                        </div>
                                    </td>
                                </tr>
                             <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>