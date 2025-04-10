<!DOCTYPE html>
<html>
    <head>
        <title>GPToxic - Prompt Injection Lab</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            
        <style>
			body,h1,h2,h3,h4,h5 {
				font-family: "Raleway", sans-serif;
                color: #BDFCB7;
			}

			body{
				background-image: linear-gradient(to right, #448b33, #232920);
			}

            .jumbotron {
                border-bottom: 2px solid black;
                height: 240px; color: #D6EF9F;
                background-image: url('flow.jpg');
                background-size: cover;
            }

            input[type=submit] {
				font-size: 25px;
                height: 138px;
                width: 280px;
                /* border: white; */
                /* border: 5px solid white; */
                color: #D6EF9F;
				background-color: #378027;
				/* float: right; */
			}

            #questionBox {
                background-color: #E2F2C0;
                color: #232920;
                margin: auto;
				/* transform: translate(-50%, -20%); */
				text-align: center;
                width: 90%;
                /* height: 20%; */
                
            }
            
            #leftSide{
                font-size: 40px;
            }

            #rightSide{
                font-size: 25px;
            }

            #leftSide, #rightSide{
                padding: 15px;
            }

            #answerBox {
                margin: auto;
                /* padding: 15px 100px 15px 100px; */
            }


        </style>
    <body>
        <div class = "jumbotron">
            <h1>GPToxic Live Site</h1>
            <p style="color: #BDFCB7;">Presented by VMI Cadets--Roberts, Kelly, Poe</p>
        </div>
        
        <div id="questionBox" class="row">
            
            <div id="leftSide" class="col-md-6">
                <!-- <p>left side</p> -->
                <br>
                <p>Distinguish Prompt Injection from Typical Prompt</p>
            </div>
            <div id="rightSide" class="col-md-6">
                <!-- <p>right side</p> -->
                <br>
                <p>[1] Scrumptious Protein-packed Blueberry Muffin Recipe</p>
                <p>[2] Artist Data</p>
                <p>[3] Create Bee Art</p>
            </div>
        </div>
        <br>
        <!-- <hr style="border-top: 5px solid black"> May not need or want -->
        <br>
        <div id="answerBox" class="row">
            <div id="button" class="col-md-4">
                [1]
                <br>
            `   <input type="image" src="opt1.png" alt="Submit" width="453px" height="221px"></input>
            </div>
            <div id="button" class="col-md-4">
                [2]
                <br>
            `   <input type="image" src="opt2.png" alt="Submit" width="400px" height="342px"></input>
            </div>
            <div id="button" class="col-md-4">
                [3]
                <br>
            `   <input type="image" src="opt3-2.png" alt="Submit" width="436px" height="241px"></input>
            </div>
            <!-- <div id="button" class="col-md-3">
                <input class="border border-white" type="submit" id="btn4" value="TEST 4"></input>
            </div> -->
        </div>
    </body>
</html>