
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GPToxic - Prompt Injection Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
                width: 90%;
                /* height: 20%; */
                
            }
            
            #leftSide{
                font-size: 40px;
                text-align: center;
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
        <div class = "jumbotron" style = "padding: 15px;">
            <h1>GPToxic Lab Environment</h1>
        </div>
            <div class = "contain-box" style = "margin-right: 8%; margin-left: 8%;">

        <div id="questionBox" class="row" style = "width: 100%;">
            
            <div id="leftSide" class="col-md-6">
                <!-- <p>left side</p> -->
                <br><br>
                <p>Distinguish Prompt Injection from Typical Prompt</p>
            </div>
            <div id="rightSide" class="col-md-6">
                <!-- <p>right side</p> -->
                <br> <p> Choose One of the Following, Based on the Images Below:</p>
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
                <!-- Modal -->
                <!-- make three seperate modals for each option-->
                <div class="modal fade" id="myModal1" role="dialog" style = "color: black;">
                    <div class="modal-dialog">
                    
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="color: black;">Incorrect</h4>
                            </div>
                            <div class="modal-body">
                                <p>Provide reasoning (copy and paste from content doc)</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Try again</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal1">
            `       <input type="image" src="opt1.png" alt="Submit" width="100%"></input>
                </button>
            </div>
            <div id="button" class="col-md-4">
                [2]
                <br>
                <!-- Modal -->
                <!-- make three seperate modals for each option-->
                <div class="modal fade" id="myModal2" role="dialog" style = "color: black;">
                <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="color: black;">Correct</h4>
                    </div>
                    <div class="modal-body">
                        <p>I am Modal 2</p>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default"><a href="homepage.php">Home page</a></button>
                    </div>
                    </div>
                    
                </div>
                </div>
                
                <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal2">
            `       <input type="image" src="opt2.png" alt="Submit" width="100%"></input>
                </button>
            </div>
            <div id="button" class="col-md-4">
                [3]
                <br>
                <div class="modal fade" id="myModal3" role="dialog" style = "color: black;">
                <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="color: black;">Incorrect</h4>
                    </div>
                    <div class="modal-body">
                        <p>I am Modal 3</p>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Try Again</button>
                    </div>
                    </div>
                    
                </div>
                </div>

                <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal3">
            `       <input type="image" src="opt3.png" alt="Submit" width="100%"></input>
                </button>
            </div>
            <!-- <div id="button" class="col-md-3">
                <input class="border border-white" type="submit" id="btn4" value="TEST 4"></input>
            </div> -->
        </div>

        </div>
    </body>
</html>