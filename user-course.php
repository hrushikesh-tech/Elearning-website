<?php
  include("header.php");
  include("userheader.php");
  include("connection.php");
  $courseid = $_GET["courseid"];
  $videoid = 0;
  if(!isset($_GET["videoid"])){
    $query = "SELECT MIN(CV.id) AS videoid FROM coursechapters AS CC, coursevideos CV ";
    $query .= "WHERE CC.id = CV.chapterid AND CC.courseid = " . $courseid;
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $videoid = $row["videoid"];
  }
  else{
    $videoid = $_GET["videoid"];
  }
  $query = "SELECT * FROM courses WHERE id = " . $courseid;
  $result = mysqli_query($con, $query);
  $course = mysqli_fetch_assoc($result);
  $query = "SELECT * FROM coursevideos WHERE id = " . $videoid;
  $result = mysqli_query($con, $query);
  $video = mysqli_fetch_assoc($result);
  $chapterid = $video["chapterid"];
  $query = "SELECT * FROM coursechapters WHERE id = " . $chapterid;
  $result = mysqli_query($con, $query);
  $chapter = mysqli_fetch_assoc($result);
?>
<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
  <h1>Course - <?= $course["name"]; ?></h1>
</div>
<div class="col-md-6 text-right">
  <a href="user-home.php">User Home</a>
</div>
</div>
</section>
<section class="white ">
<div class="container">
<div class="row">
  <div class="col-md-12 text-center">
      <h2><?= $chapter["name"] . " - " . $video["title"] ?></h2>
      <hr />
  </div>
  <div class="col-md-6">
    <iframe width="560" height="365" src="https://www.youtube.com/embed/<?= $video["videocode"]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <p><?= $video["description"]; ?></p>
  </div>
  <div class="col-md-6">
    <h4>Contents</h4>
    <?php
      $query = "SELECT * FROM coursechapters WHERE courseid = " . $courseid . " ORDER BY id";
      $chapters = mysqli_query($con, $query);
      echo "<ul>";
      while($chapter = mysqli_fetch_assoc($chapters))
      {
        echo "<li>" . $chapter["name"] . "</li>";
        $query = "SELECT * FROM coursevideos WHERE chapterid = " . $chapter["id"] . " ORDER BY id";
        $videos = mysqli_query($con, $query);
        echo "<ul>";
        while($video = mysqli_fetch_assoc($videos))
        {
          echo "<li><a href='user-course.php?courseid=" . $courseid . "&videoid=" . $video["id"] . "'><u>" . $video["title"] . "</u></a></li>";
        }
        echo "</ul>";
      }
      echo "</ul>";
    ?>    
  </div>
</div>
</div>
</div>
</section>
<?php
  include("footer.php");
?>