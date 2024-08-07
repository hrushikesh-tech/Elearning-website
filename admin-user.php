<?php
  include("header.php");
?>
<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Admin User Master</h1>
</div>
<?php
    include("adminheader.php");
    include("connection.php");
    $id = 0;
    $name = "";
    $email = "";
    $mobileno = "";
    $password = "";
    if(isset($_GET["mode"]))
    {
      if($_GET["mode"] == "delete")
      {
        $query = "DELETE FROM users WHERE id = " . $_GET["id"];
        mysqli_query($con, $query);
        header("Location:admin-users.php");
      }
      $id = $_GET["id"];
      $query = "SELECT * FROM users WHERE id = " . $id;
      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_assoc($result);
      $name = $row["name"];
      $email = $row["email"];
      $mobileno = $row["mobileno"];
      $password = $row["password"];
    }
?>
</div>
</section>
<section class="white ">
<div class="container">
<div class="row">
  <form action="saveuser.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $id ?>" />
  <div class="col-md-12">
    <br />
    Name
    <input type="text" class="form-control" name="name" value="<?= $name; ?>" required />
  </div>  
  <div class="col-md-12">
    Email
    <input type="email" class="form-control" name="email" value="<?= $email; ?>" required />
  </div>
  <div class="col-md-12">
    Mobile No
    <input type="number" class="form-control" name="mobileno" value="<?= $mobileno; ?>" required />
  </div>  
  <div class="col-md-12">
    Password
    <input type="text" class="form-control" name="password" value="<?= $password; ?>" required />
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