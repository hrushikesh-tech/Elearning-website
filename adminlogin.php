
<?php
  include("header.php");
?>

<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Admin Login</h1>
</div>
<div class="col-md-6 text-right">
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Admin Login</li>
</ol>
</div>
</div>
</div>
</div>
</section>
<section class="white section">
<div class="container">
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <div class="well">
      <?php
        if(isset($_GET["status"]))
        {
          echo "<span style='color:red;'>Invalid credentials.</span>";
        }
      ?>
      <form action="adminlogincode.php" method="POST">
      Username
      <input type="text" name="username" class="form-control" required />
      Password
      <input type="password" name="password" class="form-control" required />
      <br />
      <input type="submit" class="btn btn-success" value="Login" />
      </form>
    <div>
  </div>
</div>
</div>
</div>
</section>
<?php
  include("footer.php");
?>
