
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
		<title>마음을 전달해주오</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css?after" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.php" class="logo"><strong>Diary Mate📚</strong> <span>마음을 전달해주오</span></a>
						<audio autoplay controls>
							<source src="Videos/인생은회전목마.mp3" type="audio/mp3">
						</audio>
						<nav>
							<a href="#menu">menu</a>
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
					<section id="banner" class="major">
						<!-- 비디오 삽입 -->
						<div class="video">
							<video muted autoplay loop>
							  <source src="videos/cherryblossom1.mp4" type="video/mp4">
							</video>
						</div>

						<div class="inner" > 
							<header class="major">
								<h1>안녕, 이제는 감정과 솔직해지자</h1>
							</header>
							<div class="content">
								<p>너의 이야기를 듣고싶어. 오늘 하루는 어땠어?</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">시작하기</a></li>
								</ul>
							</div>
						</div>
					</section>


				<!-- Main -->
					<div id="main">
						<!-- One -->
							<!-- 첫번째 이미지 -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/pic01.jpg" alt="" z-s/>
									</span>
									<header class="major">
										<h3><a href="tree.php" class="link">나무 작성하러 가기</a></h3>
										<p>나무를 키워주세요</p>
									</header>
								</article>
								<!-- 두번째 이미지 -->
								<article>
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="ViewTree.php" class="link">숲 보러가기</a></h3>
										<p>다른 사람이 만든 나무를 구경해보세요</p>
									</header>
								</article>
								<!-- 세번째 이미지 -->
								<article>
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="viewcalendar.php" class="link">감정 캘린더</a></h3>
										<p>지난 감정들을 확인해보세요</p>
									</header>
								</article>
								<!-- 네번째 이미지 -->
								<article>
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="QuestView.html" class="link">업적</a></h3>
										<p>달성한 업적을 확인하세요</p>
									</header>
								</article>
							</section>
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
</html>