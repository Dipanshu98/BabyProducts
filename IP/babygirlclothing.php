<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>

<?php include 'header.php'?>

<?php include 'BSS.php'?>

<div class="row">
	<?php
	$query="SELECT * FROM `tblproducts` where type = 'bgbs'";
	$productarray = $db_handle->runQuery($query);
	if (!empty($productarray)) {
		foreach($productarray as $key=>$value){
	?>
    <div id="products" class="col-4" style="font-family: tahoma;">
        <div class="item col-xs-4 col-lg-4">
            <div class="card" style="margin-top: 30px;">
                <center><img style="width: 300px; height: 400px;" class="card-img-top" src="<?php echo $productarray[$key]["image"]; ?>" /></center>
                <div class="caption">
                    <h4 class="card-header text-center bg-dark text-light" style="font-size: 20px; padding: 3px 0px 3px 0px;">
                        <?php echo $productarray[$key]["name"]; ?></h4>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead" style="margin-left: 63px;">
                                <?php echo "Rs. ".$productarray[$key]["price"]; ?></p>
                        </div>
                            <div class="col-xs-12 col-md-6">
                                <input type="hidden" name="code" value="<?php echo $productarray[$key]["code"]; ?>">
                                <a href="http://localhost/IP/singleprod.php?code=<?php echo $productarray[$key]['code']?>" class="btn btn-success" style="background: rgb(34,34,34); color: floralwhite; width: 100px; margin-left: 36px; border: 2px solid rgb(157,157,157);">View</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
	}
}?>    
</div>

<?php include 'OPS.php'?>

<div class="row">
    <?php
    $query="SELECT * FROM `tblproducts` where type = 'bgop'";
    $productarray = $db_handle->runQuery($query);
    if (!empty($productarray)) {
        foreach($productarray as $key=>$value){
    ?>
    <div id="products" class="col-4" style="font-family: tahoma;">
        <div class="item col-xs-4 col-lg-4">
            <div class="card" style="margin-top: 30px;">
                <center><img style="width: 300px; height: 400px;" class="card-img-top" src="<?php echo $productarray[$key]["image"]; ?>" /></center>
                <div class="caption">
                    <h4 class="card-header text-center bg-dark text-light" style="font-size: 20px; padding: 3px 0px 3px 0px;">
                        <?php echo $productarray[$key]["name"]; ?></h4>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead" style="margin-left: 63px;">
                                <?php echo "Rs. ".$productarray[$key]["price"]; ?></p>
                        </div>
                            <div class="col-xs-12 col-md-6">
                                <input type="hidden" name="code" value="<?php echo $productarray[$key]["code"]; ?>">
                                <a href="http://localhost/IP/singleprod.php?code=<?php echo $productarray[$key]['code']?>" class="btn btn-success" style="background: rgb(34,34,34); color: floralwhite; width: 100px; margin-left: 36px; border: 2px solid rgb(157,157,157);">View</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
}?>    
</div>

<?php include 'DS.php'?>

<div class="row">
    <?php
    $query="SELECT * FROM `tblproducts` where type = 'bgd'";
    $productarray = $db_handle->runQuery($query);
    if (!empty($productarray)) {
        foreach($productarray as $key=>$value){
    ?>
    <div id="products" class="col-4" style="font-family: tahoma;">
        <div class="item col-xs-4 col-lg-4">
            <div class="card" style="margin-top: 30px;">
                <center><img style="width: 300px; height: 400px;" class="card-img-top" src="<?php echo $productarray[$key]["image"]; ?>" /></center>
                <div class="caption">
                    <h4 class="card-header text-center bg-dark text-light" style="font-size: 20px; padding: 3px 0px 3px 0px;">
                        <?php echo $productarray[$key]["name"]; ?></h4>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead" style="margin-left: 63px;">
                                <?php echo "Rs. ".$productarray[$key]["price"]; ?></p>
                        </div>
                            <div class="col-xs-12 col-md-6">
                                <input type="hidden" name="code" value="<?php echo $productarray[$key]["code"]; ?>">
                                <a href="http://localhost/IP/singleprod.php?code=<?php echo $productarray[$key]['code']?>" class="btn btn-success" style="background: rgb(34,34,34); color: floralwhite; width: 100px; margin-left: 36px; border: 2px solid rgb(157,157,157);">View</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
}?>    
</div>

<script type="text/javascript">
    function checkWidth(){
        if ($(window).width < 514){
            $("[id^='products']").removeClass('col-4');
        }else{
            $("[id^='products']").addClass('col-4');
        }
    }
</script>

<?php include 'footer.php'?>