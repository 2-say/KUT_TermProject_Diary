<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>		

<!DOCTYPE HTML>

<html>
	<head>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<title>공유 일기</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" type="text/css" />
		<link rel="stylesheet" href="assets/css/bird.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt style2">
						<a href="index.php" class="logo"><strong>Diary Mate 📚</strong> <span>감정을 공유하세요</span></a>
						<audio autoplay controls>
							<source src="Videos/인생은회전목마.mp3" type="audio/mp3">
						</audio>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
				<nav id="menu">
						<ul class="links">
							<li><a href="index.php">Home</a></li>
							<li><a href="ViewTree.php">숲 보기</a></li>
							<li><a href="tree.php">나무 작성</a></li>
							<li><a href="Viewcalendar.php">감정 캘린더</a></li>
						</ul>
						<ul class="actions stacked">

								<?php
    								if(!$userid) {
								?>      

							<li><a href="#" class="button primary fit">Get Started</a></li>
							<li><a href="login_form.php" class="button fit">Log In</a></li>


							<?php
   									 } else {
                						$logged = $username."(".$userid.")님[Level:".$userlevel.", Point:".$userpoint."]";
							?>
							<li><?=$logged?> </li>
							<li><a href="logout.php">Logout</a> </li>
							<?php
   								 }
							?>

						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="style2">
						
						<div class="inner">
							<span class="image">
								<img src="images/sky.jpg" alt="" width="100%" />
							</span>
							<header class="major">
								
								<h1>오늘의 나무 쓰기</h1>
							</header>
							<div class="content">
								<p>나의 일기 작성하기</p>
							</div>
						</div>
					</section>
					
					<!-- 날라가는 새 component -->
					<div class="container">
				
						<div class="bird-container bird-container--one">
							<div class="bird bird--one"></div>
						</div>
						
						<div class="bird-container bird-container--two">
							<div class="bird bird--two"></div>
						</div>
						
						<div class="bird-container bird-container--three">
							<div class="bird bird--three"></div>
						</div>
						
						<div class="bird-container bird-container--four">
							<div class="bird bird--four"></div>
						</div>
					</div>





					<!-- apple tree 열매 부분 -->
					<div class="main">
						<span class ="tree">


						<?php 
							$today = date("j");
				
							for($i = 1 ; $i < $today+1 ; $i++)
							{

								if($i == $today)
								{
								 ?>
							
									<div class="apple vibration">
										
										<div class="fa-2x">
										<i class="fa-solid fa-apple-whole fa-2xl" style="color: rgb(255, 60, 60);"><a href="board_form.php"><h6><?=$i?>일</h6></a></i>
									</div>
										
										
									</div>
								
								<?php
								}

								
								else{


							?> 
								<div class="apple">
										
										<div class="fa-2x">
										<i class="fa-solid fa-apple-whole fa-2xl" style="color: rgb(255, 60, 60);"><h6><?=$i?>일</h6></i>
										</div>
										
									</div>
							
						<?php
								}
							}
							?>
							

						
						</span>
					</div>
				</div>

				

		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>


	<!-- Footer -->
	<footer id="footer">
		<ul class="icons">
			<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
			<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
			<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
		</ul>
	</footer>
</html>