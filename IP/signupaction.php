<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

$success = false;

$result = $db_handle->runQuery("SELECT * FROM `users` where email='$email'");
$resultu = $db_handle->runQuery("SELECT * FROM `users` where uname='$uname'");

if(!empty($result)){
    echo "<span>Email already Registered.</span>";
}
elseif(!empty($resultu)){
    echo "<span>Username already Taken.</span>";
}
elseif(empty($email) || empty($password) || empty($uname) || empty($confirmpassword) || empty($fname) || empty($lname)){
    echo "<span>Fill in all fields</span>";
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<span>Improper Email</span>";
}
elseif( preg_match('/\s/',$uname) )
{
    echo "<span>Username should not contain Spaces.</span>";
    $errorUsername = true;
}
elseif(!preg_match('/^[A-Za-z][A-Za-z0-9]*(?:_[A-Za-z0-9]+)*$/',$uname)){
    echo "<span>Invalid Username. Username should start with an alphabet, can contain only single underscore followed by an alphabet or number.</span>";
}
elseif( strlen($uname)< 6 ){
    echo "<span>Username should contain atleast 6 characters</span>";
}
elseif( strlen($password)< 8){
    echo "<span>Password should contain atleast 8 characters</span>";
}
elseif( preg_match('/\s/',$password) )
{
    echo "<span>Password should not contain Spaces.</span>";
}
elseif( preg_match('/\s/',$confirmpassword) )
{
    echo "<span>Password should not contain Spaces.</span>";
}
elseif( $password != $confirmpassword ){
    echo "<span>Passwords do not match</span>";
}
else
{
    $query = "INSERT INTO users(fname, lname, email, uname, password)";
    $query .= "VALUES ('$fname', '$lname', '$email', '$uname', '$password')";
    $value = $db_handle->connectDB()->query($query);
    if($value === TRUE)
    {
        $sql = "CREATE TABLE IF NOT EXISTS `cart_$uname` (
        `id` int(8) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `code` varchar(255) NOT NULL,
        `image` varchar(255) NOT NULL,
        `price` double(10,2) NOT NULL,
        PRIMARY KEY (`id`)
      )";
    $db_handle->connectDB()->query($sql);
    echo "<span>Successfully Signed Up</span>";
    $success = true;
    }else{
        echo "<span>Failed to Sign Up.</span>";
    }
}
?>
<script type="text/javascript">
    var success = "<?php echo $success ?>";
    if(success == true){
        window.location.href = 'http://localhost/IP/login.php';
    }
</script>