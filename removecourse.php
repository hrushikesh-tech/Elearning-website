<?php
    include("connection.php");
    if(isset($_GET["userid"]) && isset($_GET["courseid"])){
        $userid = $_GET["userid"];
        $courseid = $_GET["courseid"];
        $query = "DELETE FROM usercourses WHERE userid = " . $userid . " AND courseid = " . $courseid;
        mysqli_query($con, $query);
        header("Location:admin-course-users.php?courseid=" . $courseid);
    }
    
?>