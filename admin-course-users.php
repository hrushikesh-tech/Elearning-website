<?php
  include("header.php");
  include("connection.php");
  $courseid = $_GET["courseid"];
  $query = "SELECT * FROM courses WHERE id = " . $courseid;
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_assoc($result);
  $coursename = $row["name"];
?>
<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Course Users - <?= $coursename; ?></h1>
</div>
<?php
    include("adminheader.php");
    include("connection.php");
    $query = "SELECT U.*, IFNULL(UC.id, 0) AS ucid FROM users AS U ";
    $query .= "LEFT OUTER JOIN usercourses AS UC ON U.id = UC.userid AND UC.courseid = " . $courseid . " ORDER BY U.name";
    $result = mysqli_query($con, $query);
?>
</div>
</section>
<section class="white section">
<div class="container">
<div class="row">
  <div class="col-md-12">
    <div style="width:100%;overflow-x:auto;">
    <table class="table table-responsive table-bordered table-striped">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile No</th>
        <th>Assign/Remove</th>
      </tr>
      <?php
      $count = 1;
      while($row = mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
          <td><?= $count; ?></td>
          <td><?= $row["name"]; ?></td>
          <td><?= $row["email"]; ?></td>
          <td><?= $row["mobileno"]; ?></td>
          <td>
            <?php
              if($row["ucid"] == 0)
              {
                echo '<a class="btn btn-sm btn-success" href="assigncourse.php?userid=' . $row["id"] . '&courseid=' . $courseid . '">Assign</a>';
              }
              else{
                echo '<a class="btn btn-sm btn-danger" href="removecourse.php?userid=' . $row["id"] . '&courseid=' . $courseid . '">Remove</a>';
              }
            ?>
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
</section>
<?php
  include("footer.php");
?>