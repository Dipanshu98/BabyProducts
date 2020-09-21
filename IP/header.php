<script>
function fx(str)
{
var s1=document.getElementById("qu").value;
var xmlhttp;
if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    document.getElementById("livesearch").style.display="none";
    $('#textbox-clr').text("");
    return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    document.getElementById("livesearch").style.height="300px";
    document.getElementById("livesearch").style.display="block";
  $('#textbox-clr').text("X");
    }
  }
xmlhttp.open("GET","call_ajax.php?n="+s1,true);
xmlhttp.send(); 
}
</script>

<html>
<head>
	<title></title>
	  <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/logindrop.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="jumbotron" style="height: 100px;">
        <div class="header">
          <p style="font-family: tahoma; font-size: 30px; margin-top: -37px; text-align: center;">BAmBIno</p>   
        </div>
     </div>

    <nav class="navbar navbar-inverse " style="height: 40px; width: 100%; position: absolute; z-index: 1">
        <div class="container-fluid">
            <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>                        
                 </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                 <ul class="nav navbar-nav">
                   <li><a href="index.php">Home</a></li>
                   <li><a href="products.php">Products</a></li>
                   <li><a href="storyy.php">About Us</a></li>
                   <li><a href="contact.php">Contact</a></li>
                 </ul>
                <ul class="nav navbar-nav navbar-right">
                   <li>
                    <div class="Search">
                      <form method="get" class="form-inline my-2 my-lg-0">
                        <div class="input-group" style="width: 300px; margin-top: 6.5px; margin-right: 10px;">
                          <input class="form-control mr-sm-2" type="search" onKeyUp="fx(this.value)" autocomplete="off" name="qu" id="qu" placeholder="Search" aria-label="Search">
                          <span class="input-group-addon"><button type="submit" style="border: none; background-color: rgb(238,238,238);"><span class="glyphicon glyphicon-search"></span></button></span>
                        </div>
                      </form>
                      <div style="background: white; width: 300px; font-family: tahoma; overflow-y: scroll; border-radius: 5px;" class="scrollable-menu" id="livesearch"></div>
                    </div>
                   </li>
                   <li><a href="#"><span class="glyphicon glyphicon-user dropbtn"></span> Your Account</a>
                   	<?php
                   	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                   	{
                   	?>  
                   		<div>
                   			<ul>
                          		<li><a style="text-decoration: none; cursor: default;" href="#"><?php echo $_SESSION["username"]?></a></li>
                          		<li><a style="text-decoration: none;" href="logout.php">Logout</a></li>
                     		</ul>	
                   		</div>                	
    				<?php
    				}
    				else
    				{	
    				?>
    				<div>
    					<ul>
    						<li><a style="text-decoration: none;" href="login.php">Login</a></li>
    						<li><a style="text-decoration: none;" href="signup.php">SignUp</a></li>
    					</ul>
    				</div>
    				<?php
    				}
    				?>	
                   </li>
                   <li><a href="cart_display.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>