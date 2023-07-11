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
		<title>달력 보기 페이지</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main1.css" />
		<link rel="stylesheet" href="assets/css/login_form.css" />
		<link rel="stylesheet" href="assets/css/menu.css" />
		<link rel="stylesheet" href="assets/css/menutree.css" />
		<link rel="stylesheet" href="assets/css/checkList.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>

	<body class="body1">
		<!-- Wrapper -->
			<div id="wrapper1">
				<!-- Header -->
				<header id="header">
					<h1><a href="index.php">Diary Mate📚</a></h1>
					
					<nav class="links">
						<nav class="navigation">
						<ul class="menu1">
								  <li class="menu__item">
									<a href="ViewTree_recent.php" class="menu__link">
									  <span class="menu__title">
										<span class="menu__first-word" data-hover="최신">
										  최신
										</span>
										<span class="menu__second-word" data-hover="게시글">
										  게시글
										</span>
									  </span>
									</a>
								  </li>
							  
								  <li class="menu__item">
									<a href="ViewTree_popular.php" class="menu__link">
									  <span class="menu__title">
										<span class="menu__first-word" data-hover="인기">
										  인기
										</span>
										<span class="menu__second-word" data-hover="게시글">
										  게시글
										</span>
									  </span>
									</a>
								  </li>
							  
								  <li class="menu__item">
									<a href="ViewTree_neighbor.php" class="menu__link">
									  <span class="menu__title">
										<span class="menu__first-word" data-hover="이웃">
										  이웃
										</span>
										<span class="menu__second-word" data-hover="게시글">
										  게시글
										</span>
									  </span>
									</a>
								  </li>
							  
								  <li class="menu__item">
								<a href="ViewTree.php" class="menu__link">
								  <span class="menu__title">
									<span class="menu__first-word" data-hover="모든">
									  모든
									</span>
									<span class="menu__second-word" data-hover="게시물">
									  게시물
									</span>
								  </span>
								</a>
							  </li>
								</ul>
						  </nav>
					</nav>
					
					<!-- 오디오 삽입 -->
					<audio autoplay controls>
						<source src="Videos/인생은회전목마.mp3" type="audio/mp3">
					</audio>



					
						<nav class="main">
							<ul>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
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
						<li><a href="#" class="button fit">Log In</a></li>

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


			

				
				<article class="post2">
						<h2>Login Form</h2>
						<form action="login.php" method="post">
							<div class="imgcontainer">
								<img src="images/img_avatar2.png" alt="Avatar" class="avatar">
							</div>

							<div class="container1">
								<label for="uname"><b>Username</b></label>
								<input type="text" placeholder="Enter Username" name="id" required>

								<label for="psw"><b>Password</b></label>
								<input type="password" placeholder="Enter Password" id="pass" name="pass" required>
									
								<button type="submit">Login</button>
							</div>
						</form>
				</article>

				
			</div>		






									

							
					
			
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main1.js"></script>
			<script src="assets/js/calendar.js"></script>

	</body>
</html>