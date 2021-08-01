<?php
$db = mysqli_connect("localhost","mastershan", "123456789","webtech");
if(isset($_POST['submit_button'])){
    session_start();
    
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $password = md5($_POST['password']); 
    $confirmpassword = md5($_POST['confirmpassword']);
    if($password==$confirmpassword)
    {
    $sql ="INSERT INTO people(name,email,phone,dob,address,password,confirmpassword) VALUES('$name','$email','$phone','$dob','$address','$password','$confirmpassword')";
    mysqli_query($db,$sql);
    
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['phone']=$phone;
    $_SESSION['dob']=$dob;
    $_SESSION['address']=$address;
    //$_SESSION['password']=$password;
    //$_SESSION['confirmpassword']=$confirmpassword;
    header("location:login.php");
    }
    else  echo "password does not match";
}
//echo "WELCOME TO THE PORTAL";



?>

<!DOCTYPE html>
<html>
    <head>
        <title>PROJECT</title>
        <link rel="stylesheet" type="text/css" href="signup.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <h1 >WELCOME TO THE PORTAL</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Final Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  <ul class="navbar-nav ml-auto">
             <li class="nav-item"> <a class="nav-link" herf='#'>About us</a></li>
             <li class="nav-item"> <a class="nav-link" herf='#'>Help centra</a></li>
             <li class="nav-item"> <a class="nav-link" herf='#'>Contact</a></li>
        </ul>
  
  
  </div>
        
        
        
        </nav>
    </head>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <body>
    
        <form method="post" action="signup.php">
        <fieldset>
        <legend align="center"><h2><br>"SIGN UP"</h2></legend>
        
            <table align="center">
            
                
                <tr>
                    <td>NAME:</td>
                    <td><input type="text" name="fullname" placeholder="enter your name" required></td>
                </tr>
                <tr>
                    <td>EMAIL:</td>
                    <td><input type="text" name="email" placeholder="enter your email"required></td>
                </tr>
                <tr>
                    <td>PHONE:</td>
                    <td><input type="text" name="phone" placeholder="enter your phone" required></td>
               
                </tr>
                <tr>
                <td>BIRTH DATE:</td>
                <td><input type="text" name="dob" placeholder="dd/mm/yyyy" required></td> 
                    
                </tr>
                
                <tr>
                    <td>ADDRESS:</td>
                    <td><input type="text" name="address" placeholder="enter your address" required></td>
                </tr>
                <tr>
                    <td>PASSWORD:</td>
                    <td><input type="password" name="password" placeholder="your password" required></td>
                </tr>
                <tr>
                    <td>CONFIRM PASSWORD:</td>
                    <td><input type="password" name="confirmpassword" placeholder="enter confirm password" required></td>
                </tr>    
                <tr>
                    
                    <td><input type="submit" name="submit_button" value="Sign Up" required></td>
                </tr>
                
                
                
            </fieldset>    
        </form>
        
		
         
    </body> 
       
</html>