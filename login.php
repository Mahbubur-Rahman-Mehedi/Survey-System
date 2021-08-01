<?php
$db = mysqli_connect("localhost", "", "","survey");
if(isset($_POST['submit_button'])){
    if(isset($_POST['rememberme']))
    {
        setcookie("email",$_POST["email"],time()+60*60);
        setcookie("password",$_POST["password"],time()+60*60);
        header("location:signup.php");



    }
    else{
        setcookie("email",$_POST["email"],time()-60*60);
        setcookie("password",$_POST["password"],time()-60*60);
        header("location:signup.php");
    }
    session_start();
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM people WHERE email='$email' AND password='$password'";
    $verify = mysqli_query($db, $sql);

    if(mysqli_num_rows($verify)==1){
     $_SESSION['email']=$email;
     $_SESSION['password']=$password;
     header("location:signup.php");
    }else{
        echo "Incorrect email/password combination. Check and proceed again.";


    }
    
}
    


?>





<!DOCTYPE html>
<html>
    <head>
        <title>PROJECT</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <h1 align="center">WELCOME TO THE PORTAL</h1>
        <fieldset>
        <legend align="center"><h2>"LOGIN"</h2></legend>
        <form method="post" action="login.php">
           
            <table align="center">
                
               
                <tr>
                    <td>EMAIL:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>PASSWORD:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    
                    <td><input name="rememberme" id="remember" type="checkbox" value="1" required>
                <label>Remember me</label></td>
                </tr>
                <tr>
                    <td><a href="signup.php">Sign Up</a></td>
                    <td ><input type="submit" name="submit_button" value="Login" required></td>                
              </tr>
                
                
                    
               
                
    </fieldset>  
        </form>
    </body>    
</html>