
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="asset/js/typed.js"></script>
	<!-- <link rel="stylesheet" class="#080808" type="text/css" href="asset/font-awesome/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="asset/font-awesome/css/all.min.css">
</head>
<style>
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
		outline: none;
		scroll-behavior: smooth;
		font-family: 'Poppins', sans-serif;
	}
	body{
		color: white;
		background: black;
	}
	.header{
		position: fixed;
		left: 0;
		top: 0;
		width: 100%;
		padding: 20px 10%;
		background: transparent;
		display: flex;
		justify-content: space-between;
		align-items: center;
		z-index: 100;
		transition: .5s;
	}
	.header.sticky{
		background: #0c0c0c;
		box-shadow: 0 .1rem .5rem #0c0c0c;
	}
	.logo{
		color: white;
		text-decoration: none;
		font-size: 30px;
		font-weight: 500;
		margin-right: auto;
		cursor: default;
	}
	.logo span{
		color: red;
	}
	.navbar a{
		position: relative;
		color: white;
		font-size: 18px;
		font-weight: 500;
		text-decoration: none;
		margin-left: 20px;
	}
	.navbar a.active{
		color: red;
	}
	.navbar a.active:hover::before{
		transition: 0.5s;
	}
	.navbar a.active::before{
		content: '';
		position: absolute;
		width: 100%;
		height: 2px;
		background: red;
		left: 0;
		bottom: -6px;
	}
	#menu-icon{
		font-size: 1.8rem;
		display: none;
	}
	section{
		padding: 0 10%;
	}
	.home{
		position: relative;
		width: 100%;
		height: 100%;
		justify-content: space-between;
		align-items: center;
		display: flex;
	}
	.home-content{
		max-width: 500px;
	}
	.home-content h2{
		font-size: 30px;
		font-weight: 500;
		line-height: 1.2;
	}
	.home-content h1 span{
		font-size: 56px;
		color: red;
	}
	.home-content h3{
		font-size: 32px;
		font-weight: 600;
	}
	.home-content p{
		font-size: 16px;
		margin: 20px 0 40px;
	}
	.home-sci{
		justify-content: space-between;

		margin-top: -35px;
	}
	.home-sci a{
		position: relative;
		display: inline-flex;
		width: 40px;
		height: 40px;
		background: red;
		border-radius: 50%;
		font-size: 20px;
		color: white;
		text-decoration: none;
		justify-content: center;
		align-items: center;
		margin: 1rem .5rem 1.3rem 0;
		z-index: 1;
	}
	.home-sci a::after{
		content: '';
		position: absolute;
		width: 100%;
		height: 100%;
		background: black;
		border-radius: 50%;
		transform: scale(.88);
		z-index: -1;
		transition: .5s ease;
	}
	.home-sci a:hover::after{
		transform: scale(0);
	}
	.btn{
		position: relative;
		display: inline-flex;
		justify-content: center;
		align-items: center;
		width: 180px;
		height: 48px;
		background-color: red;
		border-radius: 40px;
		color: white;
		text-decoration: none;
		font-size: 18px;
		font-weight: 500;
		letter-spacing: 1px;
	}
	.home-img{
		position: relative;
		width: 500px;
		height: 500px;
	}
	.home-img .cover-bracket{
		position: absolute;
		width: 100%;
		height: 100%;
		inset: 0;
		overflow: hidden;
	}
	.home-img .cover-bracket::before{
		content: '';
		position: absolute;
		inset: 60px;
		border: 4px solid transparent;
		border-left: 4px solid red;
		border-right: 4px solid white;
		border-radius: 50%;
		z-index: 1;
		animation: animate_01 5s linear infinite;
		pointer-events: none;
	}
	.home-img .cover-bracket::after{
		content: '';
		position: absolute;
		inset: 120px;
		border: 4px solid transparent;
		border-left: 4px solid red;
		border-right: 4px solid white;
		border-radius: 50%;
		z-index: 1;
		animation: animate_02 2.5s linear infinite;
		pointer-events: none;
	}
	/*-------------------------about-----------------------------*/
	.about{
		width: 100%;
		height: 100%;
		justify-content: space-between;
		padding-top: 4rem!important;
		align-items: center;
		display: flex;
	}
	.about-content{
		max-width: 500px;
	}
	.about-subtitle h2{
		font-size: 38px;
		font-weight: 500;
	}
	.about-subtitle h2 span{
		color: red;
	}
	.about-subtitle h3{
		font-size: 20px;
		font-weight: 500;
	}
	.about-subtitle p{
		font-size: 16px;
		margin: 10px 0 20px;
	}
	.about-sci a{
		position: relative;
		display: inline-flex;
		width: 40px;
		height: 40px;
		background: red;
		border-radius: 50%;
		font-size: 20px;
		color: white;
		text-decoration: none;
		justify-content: center;
		align-items: center;
		margin: 20px 0;
		z-index: 1;
	}
	.about-sci a::after{
		content: '';
		position: absolute;
		width: 100%;
		height: 100%;
		background: black;
		border-radius: 50%;
		transform: scale(.88);
		z-index: -1;
		transition: .5s ease;
	}
	.about-img{
		position: relative;
		width: 500px;
		height: 580px;
	}
	.about-img .img-box{
		position: absolute;
		width: 100%;
		height: 100%;
		inset: 0;
		overflow: hidden;
	}
	.about-img .img-box::before{
		content: '';
		position: absolute;
		inset: 60px;
		border: 4px solid transparent;
		border-left: 4px solid red;
		border-right: 4px solid white;
		border-top: 4px solid white;
		border-bottom: 4px solid red;
		z-index: 1;
		pointer-events: none;
	}
	/*------------------------------skills-----------------------------*/
	.skills {
		justify-content: center;
		align-items: center;
		padding-top: 6rem!important;
	}
	.skills h2{
		font-size: 38px;
		font-weight: 500;
		text-align: center;
		margin-bottom: 2rem;
	}
	.skills h2 span{
		color: red;
	}
	.skills .skills-row{
		display: flex;
		flex-wrap: wrap;
		gap: 5rem;
	}
	.skills .skills-column{
		flex: 1 1 30rem;
	}
	.skills-column .title{
		font-size: 1.9rem;
		font-weight: 500;
		margin: 0 0 1.5rem;
	}
	.skills-box .skills-content{
		position: relative;
		border: .2rem solid red;
		border-radius: .6rem;
		padding: .5rem 1.5rem;
		z-index: 1;
		overflow: hidden;
	}
	.skills-box .skills-content::before{
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 0;
		height: 100%;
		background: #0c0c0c;
		z-index: -1;
		transition: .5s;
	}
	.skills-box .skills-content:hover::before{
		width: 100%;
	}
	.skills-content .progress{
		padding: .8rem 0;
	}
	.skills-content .progress h3{
		font-size: 1.2rem;
		font-weight: 400;
		display: flex;
		justify-content: space-between;
	}
	.skills-content .progress h3 span{
		color: white;
	}
	.skills-content .progress .bar{
		height: 2rem;
		border-radius: .6rem;
		border: .2rem solid red;
		padding: .5rem;
		margin: .1rem 0;
	}
	.skills-content .progress .bar span{
		display: block;
		height: 100%;
		border-radius: .3rem;
		background: red;
	}
	.skills-column:nth-child(1) .skills-content .progress:nth-child(1) .bar span{
		width: 90%;
	}
	.skills-column:nth-child(1) .skills-content .progress:nth-child(2) .bar span{
		width: 80%;
	}
	.skills-column:nth-child(1) .skills-content .progress:nth-child(3) .bar span{
		width: 60%;
	}
	.skills-column:nth-child(1) .skills-content .progress:nth-child(4) .bar span{
		width: 45%;
	}
	.skills-column:nth-child(2) .skills-content .progress:nth-child(1) .bar span{
		width: 90%;
	}
	.skills-column:nth-child(2) .skills-content .progress:nth-child(2) .bar span{
		width: 60%;
	}
	.skills-column:nth-child(2) .skills-content .progress:nth-child(3) .bar span{
		width: 80%;
	}
	.skills-column:nth-child(2) .skills-content .progress:nth-child(4) .bar span{
		width: 85%;
	}
	/*--------------------------services-------------------------------*/
	.services {
		width: 100%;
		padding-top: 6rem!important;
	}
	.services h2{
		font-size: 38px;
		font-weight: 500;
		text-align: center;
		margin-bottom: 3rem;
	}
	.services h2 span{
		color: red;
	}
	.services .services-container{
		display: flex;
		justify-content: center;
		align-items: center;
		flex-wrap: wrap;
		gap: 2rem;
	}
	.services-container .services-box{
		flex: 1 1 21rem;
		background: #0c0c0c;
		padding: 3rem 2rem 4rem;
		border-radius: 2rem;
		box-shadow: 0 .1rem .5rem #0c0c0c;
		text-align: center;
		border-top: .6rem solid red;
		border-bottom: .6rem solid red;
		transition: .5s ease;
	}
	.services-container .services-box:hover{
		box-shadow: 0 .1rem .5rem #0c0c0c;
		transform: scale(1.02);
	}
	.services-box i{
		font-size: 3.5rem;
		color: red;
	}
	.services-box h3{
		font-size: 1.6rem;
		font-weight: 500;
	}
	.services-box h3:hover{
		color: red;
	}
	.services-box p{
		margin: .5rem 0 1rem;
	}
	/*--------------------------------------contact----------------------------------*/
	.contact{
		width: 100%;
		height: 100%;
		padding-top: 6rem!important;
	}
	.contact h2{
		font-size: 38px;
		font-weight: 500;
		text-align: center;
		margin-bottom: 3rem;
	}
	.contact h2 span{
		color: red;
	}
	.contact form{
		max-width: 800px;
		margin: 1rem auto;
		text-align: center;
		margin-bottom: 3rem;
	}
	.contact form .input-box{
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
	}
	.contact form .input-box input,
	.contact form textarea {
		width: 100%;
		padding: 1rem;
		font-size: .9rem;
		color: white;
		background: #0c0c0c;
		border: 1px solid red;
		border-radius: .5rem;
		margin: .7rem 0;
	}
	.contact form .input-box input{
		width: 49%;
	}
	.contact form textarea{
		resize: none;
	}
	/*----------------------------footer---------------------------*/
	.footer{
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
		margin-top: 6rem!important;
		padding: 20px 10%;
		background: #0c0c0c;
	}
	.footer-text p{
		font-size: 1rem;
		color: white;
	}
	.footer-text p span{
		color: red;
	}
	.footer-iconTop a {
		display: inline-flex;
		justify-content: center;
		align-items: center;
		padding: .6rem;
		text-decoration: none;
		background: white;
		border-radius: .6rem;
		border: .2rem solid #0c0c0c;
		outline: .2rem solid transparent;
		transition: .5s ease;
	}
	.footer-iconTop a:hover{
		outline-color: white;
	}
	.footer-iconTop a i{
		font-size: 1rem;
		color: #333;
	}
	@media (max-width: 1320px){
		.home-img{
			display: none;
		}
	}
	@media (max-width: 1200px){
		html{
			font-size: 85%;
		}
		.home{
			width: 100%;
			height: 100%;
			justify-content: space-between;
			align-items: center;
			display: flex;
			padding-top: 6rem!important;
		}
	}
	@media (max-width: 960px){
		#menu-icon{
			display: block;
		}
		.navbar {
			position: absolute;
			top: 100%;
			left: 0;
			width: 100%;
			padding: 1rem 3%;
			background: #0c0c0c;
			border-top: .1rem solid #0c0c0c;
			box-shadow: 0 .1rem .5rem #0c0c0c;
			display: none;
		}
		.navbar.active{
			display: block;
		}
		.navbar a{
			padding: 0 7%;
			display: block;
			font-size: 1.5rem;
			margin: 3rem 0;
		}
		.navbar a:nth-child(1),
		.navbar a:nth-child(2){
			color: white;
		}
		.navbar a.active{
			color: red;
		}
		.navbar a.active::before{
			display: none;
		}
		.home{
			text-align: center;
			justify-content: center;
		}
		.home-content h2{
			font-size: 32px;
		}
		.home-content h1 span{
			font-size: 65px;
		}
		.home-content h3{
			font-size: 30px;
		}
		.about{
			text-align: center;
			flex-direction: column-reverse;
		}
		.about-img{
			display: none;
			position: relative;
			width: 500px;
			height: 700px;
		}
	}
	@media (max-width: 768px){
		.contact form .input-box input{
			width: 100%;
		}
		.footer{
			margin-top: 16rem!important;
		}
	}
	@media (max-width: 500px){
		.footer{
			text-align: center;
			flex-direction: column-reverse;
		}
	}










	@keyframes animate_01{
		0%{
			rotate: 0deg;
		}
		100%{
			rotate: 360deg;
		}
	}

	@keyframes animate_02{
		0%{
			rotate: 360deg;
		}
		100%{
			rotate: 0deg;
		}
	}
</style>
<body>
	<header class="header">
		<a href="" class="logo">Nat<span>ty.</span></a>
		<nav class="navbar">
			<a href="#home" class="active">Home</a>
			<a href="#about">About Me</a>
			<a href="#skills">Skills</a>
			<a href="#services">Services</a>
			<a href="#contact">Contact Me</a>
		</nav>
		<div class="fas fa-bars" id="menu-icon"></div>

	</header>
	<section id="home">
		<div class="home">
			<div class="home-content">
				<h2>Hello, I am</h2>
				<h1><span>Nathan Samuel</span></h1>
				<h3><span id="typing"></span></h3>
				<p>I'm a web Designer with extensive experience for over 1 year. My expertise is to create website design, UI design and many more...</p>
				<div class="home-sci">
					<a href="https://www.facebook.com/itznat.yeargon"><i class="fab fa-facebook"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
					<a href=""><i class="fab fa-linkedin"></i></a>
				</div>
				<a href="" class="btn">Hire Me</a>
			</div>
			<div class="home-img">
				<div class="cover-bracket">
					<div class="glowing-circle"></div>
				</div>
			</div>
		</div>
	</section>
	<section id="about">
		<div class="about">
			<div class="about-img">
				<div class="img-box"></div>
			</div>
			<div class="about-content">
				<div class="about-subtitle">
					<h2>About <span>Me</span></h2>
					<h3>Hi, i'm here to help you in your next project!</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<a href="" class="btn">Read More</a>
				</div>
			</div>
		</div>
	</section>
	<section id="skills">
		<div class="skills">
			<h2 class="heading">My <span>Skills</span></h2>

			<div class="skills-row">
				<div class="skills-column">
					<h3 class="title">Coding Sills</h3>

					<div class="skills-box">
						<div class="skills-content">
							<div class="progress">
								<h3>HTML <span>90%</span></h3>
								<div class="bar"><span></span></div>
							</div>

							<div class="progress">
								<h3>CSS <span>80%</span></h3>
								<div class="bar"><span></span></div>
							</div>

							<div class="progress">
								<h3>JavaScript <span>60%</span></h3>
								<div class="bar"><span></span></div>
							</div>

							<div class="progress">
								<h3>PHP <span>45%</span></h3>
								<div class="bar"><span></span></div>
							</div>
						</div>
					</div>
				</div>

				<div class="skills-column">
					<h3 class="title">Professional Sills</h3>

					<div class="skills-box">
						<div class="skills-content">
							<div class="progress">
								<h3>Web Design <span>90%</span></h3>
								<div class="bar"><span></span></div>
							</div>

							<div class="progress">
								<h3>Web Development <span>60%</span></h3>
								<div class="bar"><span></span></div>
							</div>

							<div class="progress">
								<h3>Graphic Design <span>80%</span></h3>
								<div class="bar"><span></span></div>
							</div>

							<div class="progress">
								<h3>UI Design <span>85%</span></h3>
								<div class="bar"><span></span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="services">
		<div class="services">
			<h2 class="heading">My <span>Servies</span></h2>
			<div class="services-container">
				<div class="services-box">
					<i class="fas fa-code"></i>
					<h3>Web Development</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="" class="btn">Read More</a>
				</div>
				<div class="services-box">
					<i class="fas fa-laptop"></i>
					<h3>UI Design</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="" class="btn">Read More</a>
				</div>
				<div class="services-box">
					<i class="fas fa-paint-brush"></i>
					<h3>Graphic Design</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="" class="btn">Read More</a>
				</div>
			</div>
		</div>
	</section>
	<section id="contact">	
		<div class="contact">
			<h2 class="heading">Contact <span>Me!</span></h2>
			<form class="about-form" method="post" enctype="multipart/form-data" action="index.php">
				<?php if (!empty($message)) { ?>
					<div class="success">
						<strong><?= $message ?></strong>
					</div>
				<?php } ?>
				<div class="input-box">
					<input type="text" name="fullname" placeholder="Full Name">
					<input type="email" name="email" placeholder="Email Address">
				</div>
				<div class="input-box">
					<input type="number" name="phone" placeholder="Mobile Number">
					<input type="text" name="subject" placeholder="Email Subject">
				</div>
				
				<textarea id="" name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
				<input type="submit" class="btn" name="submit" value="Send Message">
			</form>
		</div>
	</section>
	<footer class="footer">
		<div class="footer-text">
			<p>Copyright &copy; 2023 by <span>Nate</span> | All Rights Reserved </p>
		</div>

		<div class="footer-iconTop">
			<a href="#home"><i class="fas fa-arrow-up"></i></a>
		</div>
	</footer>


	<script>
		
	</script>
	<script src="asset/js/script.js"></script>
</body>
</html>

<?php 
	
	if (!empty($_POST['submit'])) {

		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$toEmail = 'tamunodestiny497@gmail.com';

		$mailHeaders = "Name:" . $fullname . "\r\n Email:" . $email . "\r\n Phone Number:" . $phone . "\r\n Subject:" . $subject . "\r\n Message:" . $message . "\r\n"; 
		if(mail($toEmail, $fullname, $mailHeaders)){
			$message = "Your Information is Received Successfully.";
		} else{
			$message = "There was an error send your message.";
		}
	}
?>



