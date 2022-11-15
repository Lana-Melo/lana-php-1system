<?php  


include "../models/LoginModel.php";

// receiving variables from views/initial.php
$email=$_GET['email'];
$password=$_GET['password'];

// validating email
if(empty($email)){
	header("Location: /sistemadalana/views/inicial.php");
}

// calling the model.LoginModel.php 'singin' function
$logindata = new Login;
$response = $logindata->signin($email, $password);

// printing the response
echo $response;

?>