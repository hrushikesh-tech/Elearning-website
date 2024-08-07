<?php
  include("header.php");
  include("userheader.php");
?>
<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
  <h1>User Courses</h1>
</div>
<div class="col-md-6 text-right">
  <a href="user-home.php">User Home</a>
</div>
<?php
    include("connection.php");
    $userid = $_COOKIE["userid"];
    $query = "SELECT C.* FROM courses AS C, usercourses AS UC WHERE C.id = UC.courseid AND UC.userid = " . $userid . " ORDER BY C.id";
    $result = mysqli_query($con, $query);
?>
</div>
</section>
<section class="white ">
<div class="container">
<div class="row">
  <div class="col-md-12">
    <br />
    <div style="width:100%;overflow-x:auto;">
    <table class="table table-responsive table-bordered table-striped">
      <tr>
      <th style="width:60px;">No</th>
        <th style="width:130px;">Course</th>
        <th>Name</th>
      </tr>
    <?php
      $count = 1;
      while($row = mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
          <td><?= $count; ?></td>
          <td>
            <a href="user-course.php?courseid=<?= $row["id"]; ?>">
              <img src="<?= $row["image"]; ?>" style="height:80px; width:100px;" class="img-responsive" />
            </a>
          </td>
          <td>
            <a href="user-course.php?courseid=<?= $row["id"]; ?>">
              <?= $row["name"]; ?>
            </a>
          </td>          
        </tr>
        <?php
          $count++;
      }
    ?>
    </table>
    </div>
  </div>
</div>
</div>
</div>
</section>
<?php
  include("footer.php");
?>