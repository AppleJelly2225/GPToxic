<?php

    if(isset($_POST['submit'])){

        $user = $_POST['username'];
        $name = $_POST['name'];
        $pass = $_POST['password'];
        $email = $_POST['email'];
        $lab1 = 0;
        $lab2 = 0;
        $lab3 = 0;
        $phoneNum = $_POST['phoneNumber'];
        // $phoneNum = urlEncode($_POST['phoneNumber']);
        // url encode is used to replace spaces with % and @ with %40, etc. 
        // could be useful if we need to manipulate raw data later
    } else{

        $user = "N/A";
        $name = "N/A";
        $pass = "N/A";
        $email = "N/A";
        $phoneNum = "N/A";
        $lab1 = 0;
        $lab2 = 0;
        $lab3 = 0;

    }

    $serverName = "localhost"; 
    $DBname = "capstonedb";
    $username = "root";
    $password = "";
    //conn = connection
    $conn = new mysqli($serverName, $username, $password, $DBname);

    if ($conn->connect_error)
        die("DB Connection Failed");


    $sql="INSERT INTO users (userName, Name, password, email, lab1_complete, lab2_complete, lab3_complete, phoneNumber) 
    VALUES ('$user','$name','$pass','$email','$lab1','$lab2','$lab3','$phoneNum')";

    $result = $conn->query($sql);

    if ($result === TRUE){
        ECHO "SUCCESS";
    } else {
        echo "ERROR: RECORD NOT INSERTED";
    }
    $conn->close()
?>