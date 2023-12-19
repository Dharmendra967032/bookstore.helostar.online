<?php
$x=$_POST['fname'];
$y=$_POST['lname'];
$z=$_POST['number'];
$a=$_POST['email'];
$b=$_POST['password'];


$servername = "localhost";
$username = "root";
$password =  "";
$dbname="db1";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

echo "Connected successfully";

$sql = "INSERT INTO user(fname, lname, number, email, password) VALUES ('$x', '$y','$z','$a','$b')";



if ($conn->query($sql) === TRUE) {

    echo "ID created successfully Back to Login Page;

}
else{

    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();



?>