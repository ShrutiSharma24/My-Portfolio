<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>personal portfolio website </title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<!---navbar code--->
	<section class="navbar">
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#about">About Me</a></li>
			<li><a href="#Project">Project</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#contact">Contact Me</a></li>
		</ul>
	</section>
	
	<section id="home">
		<div class="main">
			<h1 class="headings">I am<br>Shruti Sharma</h1>
		    <button class="btn">
			Hire Me</button>
		</div>
	</section>
	
	<section id="about">
		<h1 class="headings">About Me</h1>
		<div id="pic">
			<img src="photos/img2.jpg" alt="shruti">
			<div id="intro">
				<h3> I am b-tech computer science student<br>
					highly organized,self-motivated, creative and<br>
					quick thinking individual Seeking a beginner role<br> 
					to enhance and explore my technical knowledge
					<h1 class="headings">Language Known</h1>
				    <ul class="a">
						<li>PYTHON</li>
						<li>C</li>
						<li>HTML</li>
						<li>CSS</li>
					</ul>  
					<h1 class="headings">Other Skills</h1>
					<ul class="b">
						<li>Leadership</li>
						<li>Team Player</li>
						<li>Deployed Person</li>
						<li>Problem solving</li>
						<li>Creative</li>
					</ul>
				</h3>
			</div>
		</div>
	</section>
	
	<section id="Project">
		<h1 class="headings"> PROJECT </h1>
		<div class="gallery">
			<img src="photos/img3.png" alt="sadjfgh">
			<img src="photos/img4.jpeg" alt="sadjfgh">
		</div>
		<h1>Movies Database Management System </h1>
		<p>In this project there is a database of movies<br> with their ratings ,reviews ,<br>youtube trailers
		and thier release dates.<br>This website features creative<br> animations and expert quality work with<br> HTML,CSS and JavaScript
		<br> The most important technology used was <br>
		<b>API(Application Programming Interface)</b></p>
	</section>
	
	
	<section id="services">
		<h1 class="headings">SERVICES</h1>
		<div class="row">
			<div class="box">
				<img src="photos/img5.jpg" alt="sadjfgh">
				<h1 class="headings">WEBSITE DESIGN</h1>
			</div>
			<div class="box">
				<img src="photos/img6.jpg" alt="sadjfgh">
				<h1 class="headings">Problem Solving</h1>
			</div>
			<div class="box">
				<img src="photos/img7.jpg" alt="sadjfgh">
				<h1 class="headings">APP DESIGN</h1>
			</div>
		</div>
	</section>
	
	<section id="contact">
		<h1 class="headings">CONTACT ME</h1>
		<form action="" class="form">
			<input type="text" name="name" class="input" placeholder="Enter your name">
			<input type="email" name="email" class="input" placeholder="enter your email">
			<textarea name="msg" id="msg" cols="30" rows="10" placeholder="Enter your message"></textarea>
			<input type="submit" value="SEND" id="send">
		</form>
	</section>
	
	
</body>
</html>















