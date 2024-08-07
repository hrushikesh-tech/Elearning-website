<?php
    if(!isset($_COOKIE["usertype"]))
    {    
        header("Location:index.php");
    }
    if($_COOKIE["usertype"] != "User")
    {
        header("Location:index.php");
    }
?>