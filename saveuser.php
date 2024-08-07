<?php
    include("connection.php");
    if(isset($_POST["name"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobileno = $_POST["mobileno"];
        $password = $_POST["password"];
        $id = $_POST["id"];
        if($id == 0){
            $query = "INSERT INTO users(name,email,mobileno,password)";
            $query .= "VALUES('" . $name . "', '" . $email . "','" . $mobileno. "','" . $password . "')" ;
            mysqli_query($con, $query);
        }
        else{
            $query = "UPDATE users SET name = '" . $name . "', ";
            $query .= "email = '" . $email . "', ";
            $query .= "mobileno = '" . $mobileno . "', ";
            $query .= "password = '" . $password . "' ";
            $query .= "WHERE id = " . $id;
            mysqli_query($con, $query);
        }
        header("Location:admin-users.php");
    }
?>