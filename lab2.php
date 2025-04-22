<!DOCTYPE html>
<html>
    <head>
        <title>GPToxic - Prompt Engineering Lab</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
			body,h1,h2,h3,h4,h5{
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

            #greenButton {
				font-size: 25px;
                height: 500px;
                /* width: 300px; */
                border: 5px solid white;
                color: #D6EF9F;
				background-color: #378027;
                white-space: normal;
                word-wrap: break-word;
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
                padding: 10px;
            }

            #answerBox {
                margin: auto;
                padding: 15px 5px 15px 5px;
                width: 90%;
                /* border: 2px solid pink; */
            }


        </style>
    <body>
        <div class = "jumbotron">
            <h1>GPToxic Lab environment</h1>
            <!-- <p style="color: #BDFCB7;">Presented by VMI Cadets--Roberts, Kelly, Poe</p> -->
        </div>
        
        <div id="questionBox" class="row">
            
            <div id="leftSide" class="col-md-6" style="margin-top: 75px">
                <!-- <p>left side</p> -->
                <p>Choose a prompt that will recreate the following image as closely as possible.</p>
            </div>
            <div id="rightSide" class="col-md-6">
                <!-- <p>right side</p> -->
                <img src="monkey.png" alt="Sad monkey in the middle of War." width="50%">
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
                                <p>Most LLMs utilize system prompts to protect the identities of real people. 
                                    They also disallow users from creating overly graphic obscene content. Not to 
                                    mention, this prompt is demanding too much from the LLM with conflicting styles and 
                                    levels of detail that could never fit in one image even if it were appropriate for the 
                                    image we were trying to create.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Try again</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button id="greenButton" type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal1" style="font-size: 20px">
                    Generate a somber scene of a proud monkey with dull fur, contemplating his dominance and brutality in a 
                        brooding yet contemplative manner on the devastated mortar-beaten battlefield between every animal species 
                        and all american politicians such as Donald Trump and Joe Biden. Show them overthrowing the government, 
                        and reestablishing natural, primal anarchy. Show the blood dawn approaching over the mountains in the background 
                        of the field where this battle just occurred between government officials and monkeys. Make the style that of a 
                        sophisticated oil painting with photorealistic 4k graphics.
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
                                <h4 class="modal-title" style="color: black;">Incorrect</h4>
                            </div>
                            <div class="modal-body">
                                <p>While this prompt does include some details about the scene and subject of the image, 
                                    the prompt is too vague; it does not capture the style or the details perceived in the 
                                    original image. This prompt would generate an image like this which is close but it 
                                    is not quite as subtle or sophisticated</p>
                                    <img src="monkey.png" alt="" width="50%">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Try again</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button id="greenButton" type="button" class="btn" data-toggle="modal" data-target="#myModal2">
                Generate a photo of a monkey after a devastating battle. Include the sun rising over mountains.
                </button>
            </div>
            <div id="button" class="col-md-4">
                [3]
                <br>
                <!-- Modal -->
                <!-- make three seperate modals for each option-->
                <div class="modal fade" id="myModal3" role="dialog" style = "color: black;">
                    <div class="modal-dialog">
                    
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="color: black;">Correct!</h4>
                            </div>
                            <div class="modal-body">
                                <p>This prompt is very specific, but it does not expect the LLM to make the impossible, and it does not violate any system prompts</p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default"><a href="homepage.php">Go Home</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <button id="greenButton" type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal3">
                Generate a somber scene of a proud monkey with dull fur, contemplating his survival on the battlefield 
                between monkeys and humans.Show the dawn approaching over the mountains in the background of the field 
                where this battle just occurred between humans and monkeys. Make the style that of a sophisticated oil painting.
                </button>
            </div>
        </div>
    </body>
</html>