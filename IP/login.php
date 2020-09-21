<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>

<body background="greyfloral.png">

<script type="text/javascript">
  function myFunction() {
    var w = document.getElementById("password");
    if (w.type === "password") {
        w.type = "text";
    } else {
        w.type = "password";
    }
}
</script>  

<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Tahoma, Geneva, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .bootstrap-iso .btn-custom{background: #030c13} .bootstrap-iso .btn-custom:hover{background: #000000;}.bootstrap-iso .form-control:focus { border-color: #030b11; -webkit-box-shadow: none; box-shadow: none;} .bootstrap-iso .has-error .form-control:focus{-webkit-box-shadow: none; box-shadow: none;} .asteriskField{color: red;}.bootstrap-iso form .input-group-addon {color:#030b11; background-color: #030b11; border-radius: 4px; padding-left:12px}</style>

<?php include 'header.php'; ?>

<p style=" font-family: tahoma; padding-bottom: 20px; text-align: center; font-size: 20px;"><br>Login Here!</p>     
<div class="bootstrap-iso" style="background-color: transparent; margin-left: 455px;">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form class="form">
     <div class="form-group ">
      <input class="form-control" id="email" name="email" placeholder="Email" type="email"/>
     </div>
     <div class="form-group ">
      <input class="form-control" id="password" name="password" placeholder="Password" type="password"/>
     </div>
     <div class="form-group ">
      <div class=" ">
       <div class="checkbox">
        <label class="checkbox">
         <input style="cursor: pointer;" name="checkbox" onclick="myFunction()" type="checkbox" value="Show Password"/>
         Show Password
        </label>
       </div>
      </div>
     </div>
     <div class="form-group">
      <div>
       <button id="submit" class="btn btn-custom " name="submit" type="submit">Login</button>
       <p class="form-message" style="padding: 10px 0px 10px 0px;text-align: center; font-family: tahoma; font-size: 20px; color: rgb(34,34,34);"></p>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
<p style=" font-family: tahoma; padding-bottom: 20px; text-align: center; font-size: 20px;"></br>Don't have an Account? <a href="signup.php" style="text-decoration: none;">Sign Up</a></p> 
<script src="login.js"></script>
</body>
</html>