<?php include('dbcon.php'); ?>
<?php include('header.php'); ?>

<?php
if (isset($_GET['no'])) {
    $no = $_GET['no'];

    $query = "select * from `course` where `no` = '$no'";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("query failed" . mysqli_error($connection));
    } else {
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
    }
}
?>

<!-- Đây là phần div main right của trang web, phần div lớn -->
<!-- và nó cũng là bắt đầu của thanh nav -->
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

    <form action="course-update.php?no_new=<?php echo $row['no']; ?>" method="post">
        <div class="div-child-right-big">
            <div class="add_student_information">
                <h2>Update course Information</h2>


                <label for="course_id">Student ID</label> <br>
                <input type="text" name="course_id" id="course_id" value="<?php echo $row['course_id']; ?>"> <br>

                <label for="course_code">Student full name</label><br>
                <input type="text" name="course_code" id="course_code" value="<?php echo $row['course_code'] ?>"><br>

                <label for="course_name">Date of birth</label><br>
                <input type="date" name="course_name" id="course_name" value="<?php echo $row['course_name'] ?>"><br>


                <label for="credit_hours">Class</label><br>
                <input type="text" name="credit_hours" id="credit_hours" value="<?php echo $row['credit_hours'] ?>"><br>


                <label for="instructor_name">Specialization</label><br>
                <input type="text" name="instructor_name" id="instructor_name" value="<?php echo $row['instructor_name'] ?>"><br>

                <button id="cancel"><a href="student-view.php">Cancel</a></button>
            </div>
        </div>
    </form>





    <?php include('footer.php'); ?>