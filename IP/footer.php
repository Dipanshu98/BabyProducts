<!DOCTYPE html>
<html>
<head>
  <link href="css/style.css" rel="stylesheet" type="text/css">\
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

</body>
</html>
<div>
  <footer class="container-fluid text-center"  style="font-family: tahoma;">

    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
      echo " ";
    }
    else
    {  
    ?>
      <p>Don't have an Account? Sign Up Now!</p>
      <a href="signup.php"><button class="btn btn-danger">SignUp</button></a>
      <br> <br>
      <form class="form-inline">Get deals:
        <input type="email" class="form-control" size="50" placeholder="Email Address">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </form>
<?php } ?>  
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-instagram"></a>
    <a href="#" class="fa fa-pinterest"></a>
    <br><br>
     <p>© BAmBIno</p>
  </footer>
</div>     