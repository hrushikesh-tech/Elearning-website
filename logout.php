<?php
    setcookie("usertype", "", time() - (86400 * 30), "/");
    setcookie("userid", "", time() - (86400 * 30), "/");
    header("Location:index.php");
?>