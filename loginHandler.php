<?php

$serverName = "localhost"; 
$DBname = "capstonedb";

$username = "root";
$password = "";
//conn = connection
$conn = new mysqli($serverName, $username, $password, $DBname);

if ($conn->connect_error)
    die("DB Connection Failed");

$user=$_POST['user'];
$pass=$_POST['pass'];

// echo $name;

$sql="select * from users where userName='$user' AND password='$pass'"; 

$result = $conn->query($sql);

// print_r( $result );

if($result -> num_rows > 0){
        echo "success";
        echo "$user, $pass<hr>";
} else {
    echo "No users matches found";
}


?>
