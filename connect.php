<?php
	$Name = $_POST['Name'];
	// $lastName = $_POST['lastName'];
	// $gender = $_POST['gender'];
	// $email = $_POST['email'];
	$password = $_POST['password'];
	// $number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','arabgoat');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Name,  password) values( ?, ?)");
		$stmt->bind_param("sssssi", $Name, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>