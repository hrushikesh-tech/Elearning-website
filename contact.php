
<?php
  include("header.php");
?>

<section class="grey page-title">
<div class="container">
<div class="row">
<div class="col-md-6 text-left">
<h1>Contact Us</h1>
</div>
<div class="col-md-6 text-right">
<div class="bread">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Contact Us</li>
</ol>
</div>
</div>
</div>
</div>
</section>
<section class="white section">
<div class="container">
<div class="row">
<div class="col-md-6">
    <img src="assets/first.jpeg" alt="" class="img-responsive" />
</div>
<div class="col-md-6">
<div class="content-widget">
<div class="widget-title">
<h4>Fill the Form</h4>
<hr>
</div>
  Name
  <input type="text" name="name" class="form-control" />
  Email
  <input type="email" name="email" class="form-control" />
  Message
  <textarea name="message" class="form-control"></textarea>
  <br />
  <input type="submit" class="btn btn-success" value="Submit" />
</div>
</div>
</div>
</div>
</div>
</section>
<?php
  include("footer.php");
?>