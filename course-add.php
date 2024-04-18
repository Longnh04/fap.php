<?php include("dbcon.php"); ?>
<?php include("header.php"); ?>
<?php
if (isset($_POST['add_course'])) {
    $courseid = $_POST['course_id'];
    $coursecode = $_POST['course_code'];
    $coursename = $_POST['course_name'];
    $credithours = $_POST['credit_hours'];
    $instructorname = $_POST['instructor_name'];

    if ($courseid == '' || empty($courseid)) {
        header('location:index.php?message=You Student id to fill in the first name!');
    } else {
        $query = "INSERT INTO `courses`(`course_id`, `course_code`, `course_name`, `credit_hours`, `instructor_name`) 
            VALUES ('$courseid','$coursecode','$coursename','$credithours','$instructorname')";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Querry Failed" . mysqli_error($connection));
        } else {
            header('location:course-view.php?insert_msg=You data has been added succesfully');
        }
    }
}
?>
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
    <!-- Kết thúc phần nav, tiếp đến là phần div main right được chia làm 2 div nhỏ -->
    <form action="course-add.php" method="post">
        <div class="div-child-right-big">
            <div class="add_student_information">
                <h2>Add new Course Information</h2>

                <label for="course_id">Course ID</label> <br>
                <input type="text" name="course_id" id="course_id"> <br>

                <label for="course_code">Course code</label><br>
                <input type="text" name="course_code" id="course_code"><br>

                <label for="course_name">Course name</label><br>
                <input type="name" name="course_name" id="course_name"><br>


                <label for="credit_hours">Credit hours</label><br>
                <input type="text" name="credit_hours" id="credit_hours"><br>


                <label for="instructor_name">Instructor name</label><br>
                <input type="text" name="instructor_name" id="instructor_name"><br>


                <button type="submit" name="add_course" id="add_course" onclick="Addstudent()">Add new course</button>
                <button id="cancel">Cancel</button>
            </div>
        </div>
    </form>
    <?php include("footer.php"); ?>