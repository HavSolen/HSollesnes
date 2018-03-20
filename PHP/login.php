<?php>
$name = filter_input(INPUT_POST, 'name');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
	if (!empty($name)){
	if (!empty($username)){
	if (!empty($password)){
$host = "HPi";
$dbusername = "root";
$dbpassword = "";
$dbname = "HSollesnes";
	}
	else{
		echo "Password should not be empty";
		die();
	}
	}
	else{
		echo "Username should not be empty";
		die();
	}

?>