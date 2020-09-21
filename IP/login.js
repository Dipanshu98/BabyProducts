$(document).ready(function () {
    $("form").submit(function (e) { 
        e.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();
        var submit = $("#submit").val();
       $(".form-message").load("login_action.php",
        {
            email: email,
            password: password,
            submit: submit
        });        
    });       
});

