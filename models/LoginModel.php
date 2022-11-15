<?php  
class Login {
	public function signin($email, $password) {
		if (empty($email) && empty($password)) {
			return false;
		}
		else {
			return true;
		}
	}

}
?>