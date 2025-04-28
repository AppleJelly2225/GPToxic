<?php
  session_start();
?>

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
            
    <style>
      body,h1,h2,h3,h4,h5,p {
        font-family: "Raleway", sans-serif
      }
    /* .col-sm-4 {background-color: #63666A; color: #E6EEF7;} */
      body {
        background-image: linear-gradient(to right, #448b33, #232920);
      }

      /* input[type=submit] {
            font-family: Oswald;
            font-size: 25px;
            padding: 12px 20px;
            width: 250px;
            color: #BDFCB7;
            background-color: #367C27;
            border: none;
            float: right;
        } */

      .jumbotron {
        border-bottom: 2px solid black;
        height: 240px; 
        color: #D6EF9F;
        background-image: url('flow.jpg');
        background-size: cover;
      }

      #sidebar {
        display: inline-block; 
        float: left; 
        max-width: 10%; 
        margin-left: 3%; 
        background-color: #D6EF9F; 
        padding: 25px;
      }
		</style>
		<!--ANIMATIONS! <^u*)-->
	</head>
	<body>
	
	<div class = "jumbotron">
		<h1>GPToxic Live Site</h1>
		<p>Presented by VMI Cadets--Roberts, Kelly, Poe</p>
	</div>

	<!-- <div class ="row" style= "margin-right: 5%; margin-left: 5%;"> <a href "http://localhost/precap/homePage.php" style="color: #D6EF9F; padding: 15px"> Home </a> &nbsp <a href "http://localhost/precap/aboutUs.php" style="color: #D6EF9F; padding: 15px"> About Us </a>  &nbsp <a href "http://localhost/precap/LessonIndex.php" style="color: #D6EF9F; padding: 15px"> Lessons </a> &nbsp <a href "*" style="color: #D6EF9F; padding: 15px"> Empty </a> &nbsp <a href "*" style="color: #D6EF9F; padding: 15px"> Empty </a> &nbsp <a href "*" style="color: #D6EF9F; padding: 15px"> Forum </a> &nbsp <a href "*" style="color: #D6EF9F; padding: 15px"> Help </a> </div><br> -->
  <div id = "sidebar" class = "sidebar">
    <div class = "logono">
  
      <?php
        if($_SESSION["log"] == "y") { ?>
          <img src = "robot_icon1-3.png" style = "max-width: 100%;"> 
          <br>
          <a href="logoutHandler.php" class="badge badge-dark" style="">Logout</a>
          <?php
        } 
        else { ?> 
          <a href="loginPage.php" class="badge badge-dark" style="">Login or register</a>
        <?php
        } 

      ?>  
    </div>
    <div class = "aboutus" style="margin-top: 50px;">
      <h4 style="text-decoration: underline;">Team Members</h4>
      <br>
      <p>
          Jude Roberts: Scrum master, Researcher
          <br><br>
          Micheal Poe: Product Owner, Doc. specialist
          <br><br>
          Audrianna Kelly: UI/UX specialist, Software developer
      </p>

    </div>
  </div>

	<div class="containo" style="display: inline-block; float: right; width: 80%; margin-left: 3%; margin-right: 3%;">
  
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="lessons-tab" data-bs-toggle="tab" data-bs-target="#lessons-tab-pane" type="button" role="tab" aria-controls="lessons-tab-pane" aria-selected="true">Lessons</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="lab-tab" data-bs-toggle="tab" data-bs-target="#lab-tab-pane" type="button" role="tab" aria-controls="lab-tab-pane" aria-selected="true">Labs & Quizzes</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="true">Contact</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="help-tab" data-bs-toggle="tab" data-bs-target="#help-tab-pane" type="button" role="tab" aria-controls="help-tab-pane" aria-selected="true">Help</button>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0" style="color: #D6EF9F">   
  
  <h1>Home</h1> 
					<p>
						Welcome to GPToxic--Web Application, Public Service Announcement (PSA), and Learning Management System (LMS). We creators of this site were inspired to start this project after doing some research into the automation of hiring workflows as well as seeing our own peers struggle finding jobs in this new AI landscape that seems to pervade so many online interactions but especially resume screening for job openings. In our research, we found many concerning aspects of AI that individuals and organizations should be aware of before they begin implementing this technology. Therefore, we created this site to educate the public and offer free learning resources for anyone interested in the efficacious deployment of AI technology for personal or industrial use. Specifically, we focus on the most prevalent contemporary AI technologyâ€“Large Language Models (LLMs). 
						</br></br>
						LLM is the broad term for models like ChatGPT, Claude, Gemini, etc. These technologies are built upon Natural Language Processing capabilities which stem from Deep Learning algorithms which are complex compartmentalized networks of mostly Supervised Machine Learning algorithms. More simply, LLMs are large models of language data; they connect words or tokens to other similar words, and they string words together based on context. They learn by training on large sets of text from the internet, books, and human speech, and they are given the correct answer to learn from and understand what words typically go together in various specific contexts. This is the main idea that LLMs are built and trained upon. After sufficient training, they become generalizable and can be further tuned with more specific instructions and training for specific tasks.
						</br></br>
						That probably does not make perfect sense to you, especially if this is your first exposure to LLM concepts. Do not worry, you will find plenty of information regarding these concepts, in detail, throughout our articles, labs, and community blog. We hope you gain a better understanding of this technology, and even if you do not learn exactly how it works, you should gain a new understanding of how to get the most out of it in the safest, most-efficient ways possible by learning about the benefits and pitfalls associated with this technology. Enjoy the free content! 
					</p>
        </div>  
  <div class="tab-pane fade" id="lessons-tab-pane" role="tabpanel" aria-labelledby="lessons-tab" tabindex="0" style="color: #D6EF9F"> 
    <h1>Lessons</h1>
    <br> 
      Lesson 1: Prompt Injection
      <a href = "article1.html">
        <button type="button" class="btn btn-primary btn-sm btn-block" style="background-color: #cee1ff; background-image: url('injection_lock1-3.png'); background-repeat: no-repeat; background-position: center; padding: 100px 0px 100px 0px; width:70%;" >
    </button></a>
    <br>  
      Lesson 2: Prompt Engineering
      <a href = "article2.html">
    <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #058083; background-image: url('engineering_article1-6.png'); background-repeat: no-repeat; background-position: center; padding: 0px 0px 230px; width:70%;"></button>
    </a>
    <br>  
      Lesson 3: AI Poisoning
    <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #eeebfc; background-image: url('aiAwareness1.2.png'); background-repeat: no-repeat; background-position: center; padding: 100px 0px 100px 0px; width:70%;"></button>
    <br><br><br>
  
  </div>
  <div class="tab-pane fade" id="lab-tab-pane" role="tabpanel" aria-labelledby="lab-tab" tabindex="0" style="color: #D6EF9F"> 
    <h1>Labs</h1>
    <br>
    <form>
      <a href="lab1.php">
      <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #ffdf90; background-image: url('injection_lab1-6.png'); background-repeat: no-repeat; background-position: center; padding: 200px 0px 100px 0px; width:70%; background-size: cover;" ></button>
      </a>
      <br>
      <a href="lab2.php">
      <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #ffc34b; background-image: url('engineering_lab1-2.png'); background-repeat: no-repeat; background-position: center; padding: 200px 0px 100px 0px; width:70%; background-size: cover;" ></button>
      </a>
      <br>
      <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #c6e1b9; background-image: url('poison_lab1-2.png'); background-repeat: no-repeat; background-position: center; padding: 200px 0px 150px 0px; width:70%; background-size: cover;" ></button>
    </form>
  </div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0" style="color: #D6EF9F"> <h1>Contacts</h1> <p>Jude Roberts: #123-456-789 <br><br> Michael Poe: #246-802-468
<br><br> Audrianna Kelly: #098-765-4321 <br><br> Mr. Sherif Abdelhamid: #777-871-0211</p></div>
  <div class="tab-pane fade" id="help-tab-pane" role="tabpanel" aria-labelledby="help-tab" tabindex="0" style="color: #D6EF9F"> <h1>FAQ</h1> </div>
</dTe
	</div>
	
	</body>
</html>