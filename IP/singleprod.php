<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$code = $_GET["code"];
?>
<?php include 'header.php'; ?>
<div class="container" style="margin-top:10;">
  <div class="row">
    <div class="col-sm-6" style="margin-top: 30px;">
      <div class="row">
        <div class="col-2" style="display: inline-block;">
          <img style="width: 75px; height: 100px; margin-top: -100px;" class="zoom img-fluid img-thumbnail" id="img1" src="images\bgbs1.jpg" onmouseover="show1()">
          <img style="width: 75px; height: 100px; margin-top: 110px; margin-left: -78px;" class="zoom img-fluid img-thumbnail" id="img2" src="images\bgbs2.jpg" onmouseover="show2()">
        </div>
        <div class="col" style="margin-top: -205px;">
          <?php 
            $product_array = $db_handle->runQuery("SELECT * FROM tblproducts where code='$code'");
            if (!empty($product_array)) { 
            foreach($product_array as $key=>$value){
              $_SESSION['product_image']= $product_array[$key]["image"];
              $_SESSION['product_name']=$product_array[$key]["name"];
              $_SESSION['product_price']=$product_array[$key]["price"];
              $_SESSION['code']=$product_array[$key]["code"];
        ?>
            <img style="margin-left: 120px; width: 300px; height: 400px;" class="img-thumbnail image" id="image" src="<?php echo $product_array[$key]["image"]; ?>">
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card" style="box-shadow: none; margin-top: 35px; margin-left: -150px; width: 800px; height: 400px; float: left;">
        <div class="card-body" style="margin-left: 30px; font-family: tahoma;">
          <h5 class="card-title" style="font-size: 40px;">
            <?php echo $product_array[$key]["name"]; ?>
          </h5></br>
          <h6 class="card-subtitle mb-2 text-muted" style="font-size: 20px;">Rs.
            <?php echo $product_array[$key]["price"]; ?>
          </h6></br>
          <form action="<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
          {
          ?>cart.php
          <?php }else{ ?>error.php
          <?php } ?>" 
          method="post" class="form-inline">
          <button style="background: rgb(34,34,34); color: floralwhite; border: 2px solid rgb(157,157,157);" type="submit" class="card-link btn btn-primary">
            Add To Cart</button>
          </form>
          <div class="dropdown-divider"></div>
        </div>
      </div>
    </div>
    <?php } }
        ?>
  </div>
</div>


<script>
function show1(){
    document.getElementById("image").src = "images\\bgbs1.jpg";
    document.getElementById("img1").style.border="2px solid white";  
}
function show2(){
    document.getElementById("image").src = "images\\bgbs2.jpg";
    document.getElementById("img2").style.border="2px solid white";
}
</script>
<?php include 'footer.php'; ?>
</body>

</html>