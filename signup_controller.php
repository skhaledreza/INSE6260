<?php
	$first_name = $_POST['first_name'];
	echo $first_name;

	$last_name = $_POST['last_name'];
	echo $last_name;

	$user_name = $_POST['username'];
	echo $user_name;

	$password= $_POST['password'];
	echo $password;

	$email = $_POST['email'];
	echo $email;

	$phone = $_POST['phone'];
	echo $phone;

	$address = $_POST['address'];
	echo $address;







$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inse6260";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO mytable1 (first_name, last_name, email, address, phone, password, username)
VALUES ('$first_name', '$last_name', '$email', '$address', '$phone', '$password', '$user_name')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);





?>