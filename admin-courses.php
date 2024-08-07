<?php
  include("header.php");
?>
<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Admin Courses</h1>
</div>
<?php
    include("adminheader.php");
    include("connection.php");
    $query = "SELECT *, (SELECT COUNT(*) FROM coursechapters AS CC WHERE CC.courseid = C.id) AS chapterscount, ";
    $query .= "(SELECT COUNT(*) FROM usercourses AS UC WHERE UC.courseid = C.id) AS usercount ";
    $query .= "FROM courses AS C ";
    $result = mysqli_query($con, $query);
?>
</div>
</section>
<section class="white ">
<div class="container">
<div class="row">
  <div class="col-md-12 text-right">
    <br />
    <a href="admin-course.php" class="btn btn-success">Add New Course</a>
  </div>
  <div class="col-md-12">
    <br />
    <div style="width:100%;overflow-x:auto;">
    <table class="table table-responsive table-bordered table-striped">
      <tr>
        <th></th>
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
       
      </tr>
    <?php
      $count = 1;
      while($row = mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
          <td>
            <a href="admin-course.php?id=<?= $row["id"] ?>&mode=edit">Edit</a>&nbsp;
            <a href="admin-course.php?id=<?= $row["id"] ?>&mode=delete" onclick="return confirm('Sure to delete?')">Delete</a>
          </td>
          <td><?= $count; ?></td>
          <td>
            <img src="<?= $row["image"]; ?>" style="height:80px; width:100px;" class="img-responsive" />
          </td>
          <td><?= $row["name"]; ?></td>
         
          <td><?= $row["description"]; ?></td>
          
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