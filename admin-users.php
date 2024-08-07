<?php
  include("header.php");
?>
<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Admin Users</h1>
</div>
<?php
    include("adminheader.php");
    include("connection.php");
    $query = "SELECT * FROM users";
    $result = mysqli_query($con, $query);
?>
</div>
</section>
<section class="white ">
<div class="container">
<div class="row">
  <div class="col-md-12 text-right">
    <br />
  <a href="admin-user.php" class="btn btn-success">Add New User</a>
  </div>
  <div class="col-md-12">
    <br />
    <div style="width:100%;overflow-x:auto;">
    <table class="table table-responsive table-bordered table-striped">
      <tr>
        <th></th>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile No</th>
        <th>Password</th>
      </tr>
      <?php
      $count = 1;
      while($row = mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
          <td>
            <a href="admin-user.php?id=<?= $row["id"] ?>&mode=edit">Edit</a>&nbsp;
            <a href="admin-user.php?id=<?= $row["id"] ?>&mode=delete" onclick="return confirm('Sure to delete?')">Delete</a>
          </td>
          <td><?= $count; ?></td>
          <td><?= $row["name"]; ?></td>
          <td><?= $row["email"]; ?></td>
          <td><?= $row["mobileno"]; ?></td>
          <td><?= $row["password"]; ?></td>
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
</section>
<?php
  include("footer.php");
?>