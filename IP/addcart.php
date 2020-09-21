<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$code = $_GET["code"];
?>
<?php include 'header.php'; ?>

 <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="kin@kinskards.com">

    <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="add" value="1">

    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="item_name" value="A Girl with the Dragon Tattoo">
    <input type="hidden" name="amount" value="4.53">
    <input type="hidden" name="currency_code" value="USD">

    <!-- Continue shopping on the web page for birthday cards -->
    <input type="hidden" name="shopping_url" value="https://example.com/birthday_cards">

    <!-- Display the payment button. -->
    <input type="image" name="submit"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif"
        alt="Add to Cart">
    <img alt="" width="1" height="1"
        src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form>