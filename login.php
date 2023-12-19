<?php
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

echo "Login";

$sql = "INSERT INTO login(email, password) VALUES ('$a','$b')";



if ($conn->query($sql) === TRUE) {

    echo "Successful!!";

}
else{

    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();



?>