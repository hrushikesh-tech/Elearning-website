<?php
    if(!isset($_COOKIE["usertype"]))
    {    
        header("Location:index.php");
    }
    if($_COOKIE["usertype"] != "Admin")
    {
        header("Location:index.php");
    }
?>
<div class="col-md-6 text-right">
    <a href="admin-home.php">Admin Home</a> | 
    <a href="admin-courses.php">Courses</a> | 
    <a href="admin-users.php">Users</a> | 
    <a href="logout.php">Logout</a>
</div>