<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>

<?php include 'header.php'; ?>
        
      <div class="row">
  <div class="column">
    <div class="card">
      <img src="baby1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Parth Sethia</h2>
        <p class="title">CEO &amp; Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="baby2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Dipanshu Someshwar</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="baby3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Ajay Soni</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>
</div>  
        
<script type="text/javascript" src="java.js"></script>
<?php include 'footer.php'; ?>