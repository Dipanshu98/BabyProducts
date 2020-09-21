<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>

<?php include 'header.php'; ?>

<div class="slideshow-container">

  <div class="mySlides">
    <img src="baby1.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script type="text/javascript" src="java.js"></script>

<?php include 'footer.php'; ?>