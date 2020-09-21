$(document).ready(function () {
    $("form").submit(function (e) { 
        e.preventDefault();
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var email = $("#email").val();
        var uname = $("#username").val();
        var confirmpassword = $("#myInput1").val();
        var password = $("#myInput").val();
        var submit = $("#submit").val();
       $(".form-message").load("signupaction.php",
        {
            fname: fname,
            lname: lname,
            email: email,
            uname: uname,
            confirmpassword: confirmpassword,
            password: password,
            submit: submit
        });        
    });
        
});