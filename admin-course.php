<?php
  include("header.php");
?>
<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Admin Course Master</h1>
</div>
<?php
    include("adminheader.php");
    include("connection.php");
    $id = 0;
    $name = "";
    $description = "";
    if(isset($_GET["mode"]))
    {
      if($_GET["mode"] == "delete")
      {
        $query = "DELETE FROM courses WHERE id = " . $_GET["id"];
        mysqli_query($con, $query);
        header("Location:admin-courses.php");
      }
      $id = $_GET["id"];
      $query = "SELECT * FROM courses WHERE id = " . $id;
      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_assoc($result);
      $name = $row["name"];
      $description = $row["description"];
    }
?>
</div>
</section>
<section class="white ">
<div class="container">
<div class="row">
  <form action="savecourse.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $id ?>" />
  <div class="col-md-12">
  <br />
    Course Name
    <input type="text" class="form-control" name="name" value="<?= $name; ?>" required />
  </div>  
  <div class="col-md-12">
    Course Description
    <textarea class="form-control" name="description" required><?= $description; ?></textarea>
  </div>
  <div class="col-md-12">
    Course Image
    <input type="file" class="form-control" name="file" accept="image/*" <?= $id == 0 ? "required" : ""; ?> />
  </div>  
  <div class="col-md-12">
    <br />
    <input type="submit" class="btn btn-success" value="Save" />
    <br /><br />
  </div>  
  </form>
</div>
</div>
</div>
</section>
<?php
  include("footer.php");
?>