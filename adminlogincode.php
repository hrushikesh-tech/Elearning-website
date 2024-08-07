<?php
    if(isset($_POST["username"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if($username == "a" && $password == "a")
        {
            $cookie_name = "usertype";
            $cookie_value = "Admin";
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            $cookie_name = "userid";
            $cookie_value = "0";
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            header("Location:admin-home.php");
        }
        else{
            header("Location:adminlogin.php?status=failed");
        }
    }
?>