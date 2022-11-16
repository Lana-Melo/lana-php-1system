<?php  
class Login {

	// check if user exists and return its name
	public function signin($email, $password) {

		// creating connection with db and adding it to the $con variable
		$con = mysqli_connect("localhost","lana","123","dblana");

		// making a query (email & password) and storing the query object into $result variable
		$result = mysqli_query($con, "SELECT * FROM user WHERE email ='".$email."' and password='".$password."'");

		// turning the query object into an array
		$row = mysqli_fetch_row($result);
		
		// check if user exists 
		if (empty($row)){
			return false;
		}

		// starting a session and creating a session variable with the username
		session_start();
		$_SESSION['userexists']=$row[1];
		return true;
	}
}
?>