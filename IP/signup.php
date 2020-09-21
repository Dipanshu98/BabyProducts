 <?php
 session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(isset($_SESSION['loggedin'])){
  header("Location:http://localhost/IP/index");
}
?>

<body background="greyfloral.png">

<script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }

    var y = document.getElementById("myInput1");
    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }
} 
</script>

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Tahoma, Geneva, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .bootstrap-iso .btn-custom{background: #030c13} .bootstrap-iso .btn-custom:hover{background: #000000;}.bootstrap-iso .form-control:focus { border-color: #030b11; -webkit-box-shadow: none; box-shadow: none;} .bootstrap-iso .has-error .form-control:focus{-webkit-box-shadow: none; box-shadow: none;} .asteriskField{color: red;}.bootstrap-iso form .input-group-addon {color:#030b11; background-color: #030b11; border-radius: 4px; padding-left:12px}</style>

<?php include 'header.php'; ?>

<p style=" font-family: tahoma; padding-bottom: 20px; text-align: center; font-size: 20px;">Sign Up now to join the BAmBIno community ;)</p>     

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso" style="background-color: transparent; margin-top: -12px; margin-left: 455px;">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form class="form">
     <div class="form-group ">
      <input class="form-control" id="fname" name="fname" placeholder="First Name" type="text"/>
     </div>
     <div class="form-group ">
      <input class="form-control" id="lname" name="lname" placeholder="Last Name" type="text"/>
     </div>
     <div class="form-group ">
      <input class="form-control" id="email" name="email" placeholder="Email"/>
     </div>
     <div class="form-group ">
      <input class="form-control" id="username" name="username" placeholder="Username" type="text"/>
     </div>
     <div class="form-group ">
      <input class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and minimum 8 characters." id="myInput" name="myInput" placeholder="Password" type="password"/>
     </div>
     <div class="form-group ">
      <input class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and minimum 8 characters." id="myInput1" name="myInput1" placeholder="Confirm Password" type="password"/>
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
       <button class="btn btn-custom " id="submit" name="submit" type="submit">
        SignUp
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
<script type="text/javascript" src="signup.js"></script>

<p class="form-message" style="padding: 10px 0px 10px 0px;text-align: center; font-family: tahoma; font-size: 20px; color: rgb(34,34,34);"></p>

<p style=" font-family: tahoma; padding-bottom: 20px; text-align: center; font-size: 20px;">Already have an Account? <a style="text-decoration: none; cursor: pointer;" href="login.php">Login</a></p>

</body>
</html>