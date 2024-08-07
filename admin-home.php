<?php
  include("header.php");
?>
<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Admin Home</h1>
</div>
<?php
    include("adminheader.php");
    include("connection.php");
    $query = "SELECT * FROM courses";
    $result = mysqli_query($con, $query);
    $courses = mysqli_num_rows($result);
    $query = "SELECT * FROM users";
    $result = mysqli_query($con, $query);
    $users = mysqli_num_rows($result);
?>
</div>
</section>
<section class="white section">
<div class="container">
<div class="row">
  <div class="col-md-4 btn-primary text-center">
    <a href="admin-courses.php">
      <h1 style="color:white;">Courses - <?= $courses; ?></h1>
    </a>
  </div>
  <div class="col-md-1"></div>
  <div class="col-md-4 btn-primary text-center">
    <a href="admin-courses.php">
      <h1 style="color:white;">Users - <?= $users; ?></h1>
    </a>
  </div>
</div>
</div>
</div>
</section>
<?php
  include("footer.php");
?>