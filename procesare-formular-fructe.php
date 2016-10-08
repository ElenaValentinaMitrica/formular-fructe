<?php

$servername = "localhost";
$username = "root";
$password = Null;
$dbname = "playground";
//Create connection:

$conn = new mysqli ($servername, $username,$password, $dbname);

//Check connection 

if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO fruits (nume, address, email, cantity, favourite, brochure) 
VALUES('" . $_POST['Name'] . "','" . $_POST['Address'] . "','" . $_POST['Email'] . "','" . $_POST['quantity'] . "','" . $_POST['fruits'] ."','" . $_POST['brochure']. "')";


if($conn->query($sql) === FALSE){
	die("Error: " . $sql . "<br>" . $conn->error);
}

echo "New record created successfully." .
	"<br>" .
	 $_POST['Name'] .
	" who lives in ".
	$_POST['Address'] .
	" with the email " .
	$_POST['Email'] .
	", eats " .
	$_POST['quantity'] . 
	" fruits per day." .
	"<br> The favourite fruit is " . 
	$_POST['fruits']. 
	" and ".
	$_POST['Name'] .
	" would " .
	($_POST['brochure']=="on" ? "":"not") . 
	" like a brochure!";
        

$conn->close();
?>