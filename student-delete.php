<?php include("dbcon.php"); ?>
<?php
    if(isset($_GET["no"])){
        $no = $_GET["no"]; 
        $query = "delete from `students` where `no` = '$no'";

        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Query Failed".mysqli_error($connection));
        }
        else{
            header('location:student-view.php?delete_msg=Your data has been deleted succesfully!');

        }
    }

?>