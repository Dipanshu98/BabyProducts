<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<?php include 'header.php'?>

<div class="container">
<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
          {
          ?>
    <h2><center>Your Cart <?php echo $_SESSION["username"]?></center></h2>
    <div class="card-deck row">
    <?php 
        $cart_items = $db_handle->runQuery("SELECT * FROM {$_SESSION['cart']}");
        if (!empty($cart_items)) { 
        foreach($cart_items as $key=>$value){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4" style="font-family: tahoma;">
            <div class="card" style="margin-top: 30px;">
            <center><img style="width: 300px; height: 400px;" class="card-img-top" src="<?php echo $cart_items[$key]["image"]; ?>" alt="Card image cap"></center>
            <div class="card-body">
              <h5 class="card-title" style="font-size: 20px; text-align: center;"><?php echo $cart_items[$key]["name"]; ?></h5>
              <p class="lead" style="margin-left: 15px; margin-top: 20px;"><?php echo $cart_items[$key]["price"]; ?></p>
                 <form class="d-inline-block" method="post" action="buynow.php">
                 <input type="hidden" name="code" value="<?php echo $cart_items[$key]["code"]; ?>">
                 <button type="submit" class="card-link btn btn-primary" style="background: rgb(34,34,34); color: floralwhite; width: 100px; margin-left: 125px; margin-top: -50px; border: 2px solid rgb(157,157,157);">Buy Now</button>
                </form>
                <form class="d-inline-block" method="post" action="remove.php">
                <input type="hidden" name="code" value="<?php echo $cart_items[$key]["code"]; ?>">
                <input type="hidden" name="id" value="<?php echo $cart_items[$key]["id"]; ?>">
                <button type="submit" class="card-link btn btn-primary" style="background: rgb(34,34,34); color: floralwhite; width: 100px; margin-left: 245px; margin-top: -50px; border: 2px solid rgb(157,157,157);">Remove</button>
                </form>
            </div>
          </div>
        </div>
          <?php
        }
    }else{
        ?><center><h4>Your Cart is empty</h4></center><?php
    }
    
    ?>
    </div>

<?php }else{ ?>
    <h2><center>You need to Login to view the cart</center></h2>
    <a href="javascript:history.go(-1)"><center>okay</center></a>
<?php }?>
</div>

<?php include 'footer.php'?>