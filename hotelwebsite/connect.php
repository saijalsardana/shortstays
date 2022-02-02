<?php
session_start();
?>
<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	$adharNumber=$_POST['adharNumber'];
	$address=$_POST['address'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number, adharNumber, address) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssiis", $firstName, $lastName, $gender, $email, $password, $number, $adharNumber, $address);
		$execval = $stmt->execute();

		echo $execval;
		echo "Registration successfully...";
		header('location:signin.php');
		$stmt->close();
		$conn->close();
	}
?>