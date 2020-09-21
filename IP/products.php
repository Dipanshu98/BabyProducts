<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>

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
    <title>-: BAmBIno :-</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/logindrop.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <style>
    body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    }

    .girlclothing {
      background-image:  url("babygirl.jpg");
      height: 50%;
        width: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    .boyclothing {
      background-image:  url("babyboy.jpg");
      height: 50%;
        width: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    .toys {
      background-image:  url("toys.jpg");
      height: 50%;
        width: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }
        
    .bedding {
      background-image:  url("bedding.jpg");
      height: 50%;
        width: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }
        
    .healthcare {
      background-image:  url("healthcare.jpg");
      height: 50%;
        width: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    .gctext {
      text-align: center;
      position: absolute;
      top: 40%;
      left: 85%;
      transform: translate(-50%, -50%);
      color: white;
    }
        
        
    .bctext {
      text-align: center;
      position: absolute;
      top: 40%;
      left: 15%;
      transform: translate(-50%, -50%);
      color: white;
    }

    .toystext {
      text-align: center;
      position: absolute;
      top: 40%;
      left: 85%;
      transform: translate(-50%, -50%);
      color: white;
    }
     
    .bedtext {
      text-align: center;
      position: absolute;
      top: 40%;
      left: 15%;
      transform: translate(-50%, -50%);
      color: white;
    }
        
    .healthtext {
      text-align: center;
      position: absolute;
      top: 40%;
      left: 75%;
      transform: translate(-50%, -50%);
      color: darkgray;
    }    

    .gctext button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 10px 25px;
      color: white;
      background-color:#555;
      text-align: center;
      cursor: pointer;
    }
        
    .bctext button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 10px 25px;
      color: white;
      background-color:#555;
      text-align: center;
      cursor: pointer;
    }

    .toystext button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 10px 25px;
      color: white;
      background-color:#555;
      text-align: center;
      cursor: pointer;
    }    

    .bedtext button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 10px 25px;
      color: white;
      background-color:#555;
      text-align: center;
      cursor: pointer;
    }        
     
    .healthtext button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 10px 25px;
      color: white;
      background-color:#555;
      text-align: center;
      cursor: pointer;
    }            
        
    .gctext button:hover {
      background-color:black;
      color: gold;
    }
        
    .bctext button:hover {
      background-color:black;
      color: gold;
    }

    .toystext button:hover {
      background-color:black;
      color: gold;
    }
        
    .toystext button:hover {
      background-color:black;
      color: gold;
    }    
     
    .bedtext button:hover {
      background-color:black;
      color: gold;
    }       
        
    .healthtext button:hover {
      background-color:black;
      color: gold;
    }  
    </style>
    </head>
    <body>
        
        <div class="jumbotron" style="height: 100px;">
    <div class="header">
          <p style="font-family: tahoma; font-size: 30px; margin-top: -37px; text-align: center;">BAmBIno</p>   
    </div>
</div>

<nav class="navbar navbar-inverse"  style="height: 40px; width: 100%; position: absolute; z-index: 1">
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
                      <div style="background: white; width: 300px; font-family: tahoma; overflow-y: scroll; border-radius: 5px; border: 1px solid rgb(34,34,34)" class="scrollable-menu" id="livesearch"></div>
                    </div>
                  </li>
                   <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a>
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
                   <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                </ul>
              </div>
         </div>
     </nav>
        
<div class="girlclothing">
  <div class="gctext">
    <h1 style="font-size:35px">BabyGirl Clothing</h1>
    <button onclick="location.href = 'babygirlclothing.php'">Explore</button>
  </div>
</div>
    
<div class="boyclothing">
  <div class="bctext">
    <h1 style="font-size:35px">BabyBoy Clothing</h1>
    <button>Explore</button>
  </div>
</div>
    
<div class="toys">
  <div class="toystext">
    <h1 style="font-size:35px">Toys</h1>
    <button>Explore</button>
  </div>
</div>
    
<div class="bedding">
  <div class="bedtext">
    <h1 style="font-size:35px">Bedding</h1>
    <button>Explore</button>
  </div>
    </div>
    
<div class="healthcare">
  <div class="healthtext">
    <h1 style="font-size:35px">Healthcare</h1>
    <button>Explore</button>
  </div>
    </div>

        <script type="text/javascript" src="java.js">
</script>
<?php include 'footer.php'; ?>
    </body>
</html>