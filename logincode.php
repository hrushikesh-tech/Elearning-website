<?php
    include("connection.php");
    if(isset($_POST["email"]))
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = "SELECT * FROM users WHERE email = '" . $email . "' AND password = '" . $password . "'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);

            $cookie_name = "usertype";
            $cookie_value = "User";
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            $cookie_name = "userid";
            $cookie_value = $row["id"];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            $cookie_name = "name";
            $cookie_value = $row["name"];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            header("Location:user-home.php");
        }
        else{
            header("Location:login.php?status=failed");
        }
    }
?>