<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/cybersmartkids.css">
</head>
<body>
        <header>
        <div id="cybersmartkidscontain">
            <a href="#">
                <img width="400px" height="400px" rel="preload" loading="eager" decoding="async" fetchpriority="high"
                    style="cursor: pointer" id="cybersmartkids" alt="CyberSmartKids logo" src="images/logo_transparent.png"
                    class="logo" />
            </a>
        </div>
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
		<div class="container">
			<div class="navbar-brand">
				<span class="navbar-logo">
					<a href="#">
						<img src="images/photo-1608452964553-9b4d97b2752f.jpeg" alt="CyberSmartKids" style="height: 4.3rem;">
					</a>
				</span>
				<span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="#">CyberSmartKids</a></span>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
					<li class="nav-item">
						<a class="nav-link link text-black display-4" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link text-black display-4" href="#" aria-expanded="false">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link text-black display-4" href="#">Contact</a>
					</li>
				</ul>
				
				<div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="#">Get Started</a></div>
			</div>
		</div>
	</nav>
    </header>

    <main>
        <section>
            <h2>Pokemon Go: Teenager shot dead while hunting creatures</h2>
            <p>'He was already in bed when his cousin sent him a message asking him to go out and download a game a few blocks from the house,' Jerson Lopez de Leon's mother said:</p>
            <img src="images/pokemon-go-walking.jpg" alt="Pokemon Go">
        </section>

        <section>
            <h2>PUBG game exposes children to crime, negative thinking: Scientist</h2>
            <p>'PUBG exposes children to a world of crime and negative thinking, a top scientist has warned amid calls in some quarters to ensure that online games, particularly for kids, comply with best international standards, regulations and practices. Reports said a 22-year-old man addicted to the multi-player combat game allegedly committed suicide at his home in Maharashtras Yavatmal district last month, while a boy, aged 14, killed self after a nightlong PUBG (PlayerUnknowns Battlegrounds) session in Kota in Rajasthan in May. Last year, a 15-year-old boy from Bhiwandi in Thane district of Maharashtra allegedly killed his elder brother for scolding him over playing PUBG on his mobile phone.</p>
            <img src="images/bgmi-game-pov-v1k6rf091b4hz9gz.jpg" alt="PUBG">
        </section>

        <section>
            <h2>Fooled by your own kid? Chilling rise of AI voice cloning scams</h2>
            <p>Imagine your child crying on the phone and asking for help? Sarita Khanna*, the middle-aged wife of a businessman from MP's Khane, did what any mother would do when she got a call from an unknown number that her 19- year-old daughter Surbhi studying in an Indore college had been kidnapped.
              The caller said in a stern voice, "Your daughter is with us.</p>
            <img src="images/108584548.jpg" alt="AI voice cloning scams">
        </section>
    </main>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
    </div>
</body>
</html>