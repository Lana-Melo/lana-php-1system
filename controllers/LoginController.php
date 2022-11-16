<?php  


include "../models/LoginModel.php";


// receiving variables from views/initial.php
$email=$_GET['email'];
$password=$_GET['password'];

// validating email to not make useless contact with db
if(empty($email)){
	header("Location: /sistemadalana/views/inicial.php");
}

// calling the model.LoginModel.php 'singin' function
$logindata = new Login;
$response = $logindata->signin($email, $password);

// if user exists, echo a welcome message. otherwise, echo a error message
if ($response) {
	echo "ola, ".$_SESSION['userexists'];
}
else {
	echo "User not found";
}

?>