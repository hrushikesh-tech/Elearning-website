<?php
  include("header.php");
  include("connection.php");
  $courseid = $_GET["courseid"];
  $query = "SELECT * FROM courses WHERE id = " . $courseid;
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_assoc($result);
  $coursename = $row["name"];

  $id = 0;
  $name = "";
  if(isset($_GET["mode"]))
  {
    if($_GET["mode"] == "delete")
    {
      $query = "DELETE FROM coursechapters WHERE id = " . $_GET["id"];
      mysqli_query($con, $query);
      header("Location:admin-course-chapters.php?courseid=" . $courseid);
    }
    $id = $_GET["id"];
    $query = "SELECT * FROM coursechapters WHERE id = " . $id;
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $name = $row["name"];
  }
?>
<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Course Chapters - <?= $coursename; ?></h1>
</div>
<?php
    include("adminheader.php");
?>
</div>
</section>
<section class="white ">
<div class="container">
<div class="row">
  <form action="savechapter.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="courseid" value="<?= $courseid; ?>" />
    <input type="hidden" name="id" value="<?= $id; ?>" />
    <div class="col-md-12">
      <br />
      Chapter Name
      <input type="text" class="form-control" name="name" value="<?= $name; ?>" required />
    </div>  
    <div class="col-md-12">
      <br />
      <input type="submit" class="btn btn-success" value="Save" />
    </div>  
  </form>
</div>
<div class="row">
  <div class="col-md-12">
    <br />
    <div style="width:100%;overflow-x:auto;">
    <table class="table table-responsive table-bordered table-striped">
      <tr>
        <th></th>
        <th>No</th>
        <th>Name</th>
        <th>Videos</th>
      </tr>
    <?php
      $count = 1;
      $query = "SELECT *, 0 AS videoscount FROM coursechapters WHERE courseid = " . $courseid;
      $result = mysqli_query($con, $query);
      while($row = mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
          <td>
            <a href="admin-course-chapters.php?courseid=<?= $courseid; ?>&id=<?= $row["id"] ?>&mode=edit">Edit</a>&nbsp;
            <a href="admin-course-chapters.php?courseid=<?= $courseid; ?>&id=<?= $row["id"] ?>&mode=delete" onclick="return confirm('Sure to delete?')">Delete</a>
          </td>
          <td><?= $count; ?></td>
          <td><?= $row["name"]; ?></td>
          <td>
              <a class="btn btn-primary" href="admin-course-videos.php?chapterid=<?= $row["id"]; ?>">
                Videos - <?= $row["videoscount"]; ?>
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