<?php include("./dbcon.php"); ?>
<?php include("./header.php"); ?>

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
    <!-- Kết thúc phần nav, tiếp đến là phần div main right trong page course-view -->
    <div class="div-card-right-cover">
        <div class="div-card-main">
            <div class="div-card-main-header">
                <h2>Courses information</h2>
                <!-- a button add start here -->
                <!-- onclick="location.href='course_add.php'" >> can thi dung nha -->
                <a href="./course-add.php"><button class="btn-add-new-course" type="button" id="btn-add-new-course" function="Addcourse">Add a new course</button></a>
            </div>
            <div class="div-search">
                <input class="input" id="input1" type="text" placeholder="Course name">
                <input class="input" id="input2" type="text" placeholder="Course code">
                <input class="input" id="input3" type="text" placeholder="Instructor name">
                <button class="btn-search" onclick="Search()">Search</button>
                <button class="btn-reset" onclick="ResetInputs()">Reset</button>
            </div>

            
            <div class="div-course-infor">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Credit hours</th>
                            <th>Instructor name</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "select * from `courses`";
                        $result = mysqli_query($connection, $query);
                        if (!$result) {
                            die("query failed" . mysqli_error($connection));
                        } else {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['no']; ?></td>
                                    <td><?php echo $row['course_id']; ?></td>
                                    <td><?php echo $row['course_name']; ?></td>
                                    <td><?php echo $row['credit_hours']; ?></td>
                                    <td><?php echo $row['instructor_name']; ?></td>
                                    <td>
                                        <div class="div-td-flex">
                                            <div class="div-td-items" id="view-course"><a href="courseadd-form.php?no=<?php echo $row['no']; ?>"><i class="fa-solid fa-eye" onclick="document.getElementById('id01').style.display='block'"></i></a></div>
                                            <div class="div-td-items" id="change-course"><a href="course-update.php?no=<?php echo $row['no']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></div>
                                            <div class="div-td-items" id="delete-course"><a href="course-delete.php?no=<?php echo $row['no']; ?>"><i class="fa-solid fa-trash"></i></a></div>
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
    <?php include("./footer.php"); ?>





    