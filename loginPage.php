<!DOCTYPE html>
<html>
	<head>
		<title>GPToxic</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
         
		<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

        <style>
			body,h1,h2,h3,h4,h5,p {
				font-family: "Raleway", sans-serif
			}

			body{
				background-image: linear-gradient(to right, #448b33, #232920);
			}

			/* .col-sm-4 {
				background-color: #63666A; color: #E6EEF7;
			} */

			#OtherBody {
				position: absolute; 
				top: 50%; 
				left: 50%; 
				transform: translate(-50%, -20%);
				margin: auto;
				text-align: center;
			}

			.jumbotron {
        		border-bottom: 2px solid black;
        		height: 240px; color: #D6EF9F;
        		background-image: url('flow.jpg');
        		background-size: cover;
      		}

			input[type=submit] {
				font-family: Oswald;
				font-size: 25px;
				/* padding: 5px 50px; */
                width: 250px;
                color: #BDFCB7;
				background-color: #367C27;
                border: none;
				float: right;
			}
			/* OPTIONAL \/\/\/  */
			
			    /* button:hover{
                    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			} */
		</style>
		<!--ANIMATIONS! <^u*)-->
	</head>
    <body>
        
        <div class = "jumbotron">
            <h1>GPToxic Live Site</h1>
            <p>Presented by VMI Cadets--Roberts, Kelly, Poe</p>
        </div>

		<div id="OtherBody" style="background-color: #D6EF9F;">
			<form action="loginHandler.php" method="post" style="padding: 50px">
			<h1>Login</h1>
			<br>
			Username: <input type="text" name="user" required>
			<br><br>
			Password: <input type="text" name="pass" required>
			<br>
			<a href="registeration.php" style="float: right; font-size: 15px">Not Registered?</a>
			<br><br>
			<input type="submit" name="login" value="LOGIN"></input>	
		</form>
			<br><br>
		</div>

    </body>
</html>
