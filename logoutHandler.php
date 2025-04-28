
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

session_start();

$_SESSION["log"] = "n";

?> 

<p>Logout Successful</p>
<a href = "homepage.php"><input type="submit" value="Home" style="border-width: medium; border-color: white;"></input></a>

</body>
</html>