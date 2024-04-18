<?php include("dbcon.php"); ?>
<?php include("header.php"); ?>
<?php 
    if(isset($_POST['add_students'])) {
        $studentid = $_POST['student_id'];
        $studentname = $_POST['student_name'];
        $studentbirth = $_POST['student_birth'];
        $studentclass = $_POST['student_class'];
        $studentspecialization = $_POST['student_specialization'];
        $studentgender = $_POST['student_gender'];
        $studentaddress = $_POST['student_address'];
        $studentphone = $_POST['student_phone'];
        $studentemail = $_POST['student_email'];

        if($studentid == '' || empty($studentid)) {
            header('location:index.php?message=You Student id to fill in the first name!');
        }
        else{
            $query = "INSERT INTO `students`(`student_id`, `student_name`, `date_of_birth`, `class`, `specialization`, `gender`, `address`, `phone_number`, `email`)
            VALUES ('$studentid','$studentname','$studentbirth','$studentclass','$studentspecialization','$studentgender','$studentaddress','$studentphone','$studentemail')";
            $result = mysqli_query($connection, $query);
            if(!$result) {
                die("Querry Failed". mysqli_error($connection));
            }
            else{
                header('location:student-view.php?insert_msg=You data has been added succesfully');
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
    <form action="student-add.php" method="post">
        <div class="div-child-right-big">
            <div class="add_student_information">
                <h2>Add new Student's Information</h2>
                <label for="student_id">Student ID</label> <br>
                <input type="text" name="student_id" id="student_id"> <br>
                <label for="student_name">Student full name</label><br>
                <input type="text" name="student_name" id="student_name"><br>
                <label for="student_birth">Date of birth</label><br>
                <input type="date" name="student_birth" id="student_birth"><br>
                <label for="student_class">Class</label><br>
                <input type="text" name="student_class" id="student_class"><br>
                <label for="student_specialization">Specialization</label><br>
                <input type="text" name="student_specialization" id="student_specialization"><br>
                <br>
                <label for="student_gender">Gender</label><br>
                <input type="text" name="student_gender" id="student_gender"><br>
                <label for="student_address">Address</label><br>
                <input type="text" name="student_address" id="student_address"><br>
                <label for="student_phone">Phone number</label><br>
                <input type="number" name="student_phone" id="student_phone"><br>
                <label for="student_email">Email Address</label><br>
                <input type="text" name="student_email" id="student_email"><br>
                <button type="submit" name="add_students" id="add_student" onclick="Addstudent()">Add new
                    Student</button>
                <button id="cancel">Cancel</button>
            </div>
        </div>
    </form>
    <?php include("footer.php"); ?>