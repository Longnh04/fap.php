<?php include('dbcon.php'); ?>
<?php include('header.php'); ?>

<?php
if (isset($_GET['no'])) {
    $no = $_GET['no'];

    $query = "select * from `students` where `no` = '$no'";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("query failed" . mysqli_error($connection));
    } else {
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
    }
}
?>

<?php
if (isset($_POST["update_students"])) {
    if (isset($_GET["no_new"])) {
        $nonew = $_GET["no_new"];
    }
    $studentid = $_POST['student_id'];
    $studentname = $_POST['student_name'];
    $studentbirth = $_POST['student_birth'];
    $studentclass = $_POST['student_class'];
    $studentspecialization = $_POST['student_specialization'];
    $studentgender = $_POST['student_gender'];
    $studentaddress = $_POST['student_address'];
    $studentphone = $_POST['student_phone'];
    $studentemail = $_POST['student_email'];
    $query = "UPDATE `students` SET `student_id`='$studentid',`student_name`='$studentname',`date_of_birth`='$studentbirth',`class`='$studentclass',`specialization`='$studentspecialization',`gender`='$studentgender',`address`='$studentaddress',`phone_number`='$studentphone',`email`='$studentemail' WHERE `no` = '$nonew'";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("query failed" . mysqli_error($connection));
    } else {
        header('location:student-view.php?update_msg=Your data has been updated succesfully!');
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

    <form action="student-update.php?no_new=<?php echo $row['no']; ?>" method="post">
        <div class="div-child-right-big">
            <div class="add_student_information">
                <h2>Update Student's Information</h2>

                <label for="student_id">Student ID</label> <br>
                <input type="text" name="student_id" id="student_id" value="<?php echo $row['student_id']; ?>"> <br>

                <label for="student_name">Student full name</label><br>
                <input type="text" name="student_name" id="student_name" value="<?php echo $row['student_name'] ?>"><br>

                <label for="student_birth">Date of birth</label><br>
                <input type="date" name="student_birth" id="student_birth" value="<?php echo $row['date_of_birth'] ?>"><br>


                <label for="student_class">Class</label><br>
                <input type="text" name="student_class" id="student_class" value="<?php echo $row['class'] ?>"><br>


                <label for="student_specialization">Specialization</label><br>
                <input type="text" name="student_specialization" id="student_specialization" value="<?php echo $row['specialization'] ?>"><br>


                <label for="student_gender">Gender</label><br>
                <input type="text" name="student_gender" id="student_gender" value="<?php echo $row['gender'] ?>"><br>


                <label for="student_address">Address</label><br>
                <input type="text" name="student_address" id="student_address" value="<?php echo $row['address'] ?>"><br>

                <label for="student_phone">Phone number</label><br>
                <input type="number" name="student_phone" id="student_phone" value="<?php echo $row['phone_number'] ?>"><br>

                <label for="student_email">Email Address</label><br>
                <input type="text" name="student_email" id="student_email" value="<?php echo $row['email'] ?>"><br>

                <button type="submit" name="update_students" id="update_student" onclick="updateStudent()">Update
                    Student</button>
                <button id="cancel">Cancel</button>
            </div>
        </div>
    </form>





    <?php include('footer.php'); ?>