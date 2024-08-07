<?php
    include("connection.php");
    if(isset($_POST["name"]))
    {
        $name = $_POST["name"];
        $description = $_POST["description"];
        $id = $_POST["id"];
        if($id == 0){
            $query = "INSERT INTO courses(name, description) ";
            $query .= "VALUES('" . $name . "', '" . $description . "')";
            mysqli_query($con, $query);
            $id = $con->insert_id;
        }
        else{
            $query = "UPDATE courses SET name = '" . $name . "', ";
            $query .= "description = '" . $description . "' ";
            $query .= "WHERE id = " . $id;
            mysqli_query($con, $query);
        }
        if (!empty($_FILES['file']['name'])) {
            $fileName = $_FILES["file"]["name"];
            $fileTmpName = $_FILES["file"]["tmp_name"];  
            $random = rand(1111,9999);
            $newFileName = $random . $fileName;
            $uploadPath = "coursepics/" . $newFileName;
            move_uploaded_file($fileTmpName, $uploadPath);

            $query = "UPDATE courses SET image = '" . $uploadPath . "' WHERE id = " . $id;
            mysqli_query($con, $query);
        }

        header("Location:admin-courses.php");
    }
?>