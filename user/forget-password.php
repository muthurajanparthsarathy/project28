<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $mobno=$_POST['mobilenumber'];
    $email=$_POST['email'];

        $query=mysqli_query($con,"select ID from tbladmin where  Email='$email' and  MobileNumber ='$mobno' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['mobilenumber']=$mobno;
      $_SESSION['email']=$email;
     
     echo "<script type='text/javascript'> document.location ='reset-password.php'; </script>";
    }
    else{
      echo "<script>alert('Invalid Details. Please try again.');</script>";
    }
  }
  ?>


<!DOCTYPE html>
<html lang="en" style="height:90vh;">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Sign in</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/sign.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background: url("../images/university.jpg");
    background-repeat:no-repeat;
	font-family: 'Roboto', sans-serif;
	height: 100vh; 
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body class="h-100">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="signIn.php" class=" btn btn-primary">Sign In</a>
      <a href="signup.php" class="ml-2 btn btn-primary">Sign Up</a>

    </form>
  </div>
</nav>
<div class="container h-100 ">

       <div class="row h-100">  
           <div class="col-md-6  col-lg-5 col-sm-10  box bg signup-form  m-auto">
    <form action="" method="post" novalidate>
		<h2>Recover your password</h2>
        
        <div class="form-group">
        	<input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
            <div class="valid-feedback">Correct Email</div>
            <div class="invalid-feedback">Enter Valid Email</div>
               </div>
		<div class="form-group">
            <input type="password" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="mobile number" required="required">
            <div class="valid-feedback">Correct Password</div>
            <div class="invalid-feedback">Enter Valid number</div>
        
          </div>
		        

 <div class="row">
                        <div class="col-6 col-sm-6 col-md-6">
            <button type="submit" name="login" class="btn btn-success btn-lg btn-block">Reset</button>

                        </div>    <div class="col-6 col-sm-6 col-md-6">
                        <a href="signin.php" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i> Login</a></div>
                      </div>

    </form>
</div>
</div>
</div>
<script>
(function(){
 "use strict"
 window.addEventListener("load",function(){
 let forms=document.getElementsByTagName("form")
  var validation=Array.prototype.filter.call(forms,function(form){
    form.addEventListener("submit",function(event){
      if(form.checkValidity()===false){
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add("was-validated")

    },false)
  })


 },false)



})()




  </script>



</body>
</html>