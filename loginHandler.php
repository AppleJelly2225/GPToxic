<?php

session_start();

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


?>

<html>
            <head>
                <title>GPToxic</title>

                <style>
                    body {
                            background-image: linear-gradient(to right, #448b33, #232920);
                        }

                    .jumbotron {
                        border-bottom: 2px solid black;
                        height: 240px; 
                        color: #D6EF9F;
                        background-image: url('flow.jpg');
                        background-size: cover;
                    }

                    input[type=submit] {
                        font-family: Oswald;
                        font-size: 25px;
                        /* padding: 12px 20px; */
                        width: 250px;
                        color: #BDFCB7;
                        background-color: #367C27;
                        /* border: none; */
                        float: left;
			}
                </style>
            </head>
            <body>
            <div class = "jumbotron">
                <h1>GPToxic Live Site</h1>
                <p>Presented by VMI Cadets--Roberts, Kelly, Poe</p>
            </div>


<?php
// print_r( $result );

if($result -> num_rows > 0){
        // echo "success";
        // echo "$user, $pass<hr>";
        $_SESSION["log"] = "y"; 
        ?>

        <p>Successful Login. Return to Home Page.</p>
        <a href = "homepage.php"><input type="submit" onclick="lab1.php" value="Home" style="border-width: medium; border-color: white;"></input></a>
        </body>
        </html>

        <?php

} else {
    echo "No users matches found";

    $_SESSION["log"] = "n"; 
    
        ?>

        
        <p>Login Failed. Return to Login Page to Try Again or Register User.</p>
        <a href = "loginPage.php"><input type="submit" value="Login Page" style="border-width: medium; border-color: white;"></input></a>
        </body>
        </html>

        <?php

}


?>
