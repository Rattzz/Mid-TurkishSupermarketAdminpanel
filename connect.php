<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
    $status = $_POST['status'];


	// Database connection
	$conn = new mysqli('localhost','root','','superbim');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into cashier(username, password, status) values(?, ?, ?)");
		$stmt->bind_param("sss", $username, $password, $status);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
        echo header("location:index.html");
		$stmt->close();
		$conn->close();
	}
?>