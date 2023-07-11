

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
		<title>Diary Mate📚</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main1.css" />
		<link rel="stylesheet" href="assets/css/menu.css" />
		<link rel="stylesheet" href="assets/css/menutree.css" />
	</head>
	<body class="single is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

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
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							
							</ul>
						</nav>
					</header>

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

				<!-- Main -->
					<div id="main">


						<?php
						$num  = $_GET["num"];
						$page  = $_GET["page"];
					
						$con = mysqli_connect("127.0.0.1", "root", "9eexju!@12","WEBDEV1");
						$sql = "select * from board where num=$num";
						$result = mysqli_query($con, $sql);
					
						$row = mysqli_fetch_array($result);
						$id      = $row["id"];
						$name      = $row["name"];
						$regist_day = $row["regist_day"];
						$subject    = $row["subject"];
						$content    = $row["content"];
						$file_name    = $row["file_name"];
						$file_type    = $row["file_type"];
						$file_copied  = $row["file_copied"];
						$hit          = $row["hit"];
						$img_path    = "DATA/".$row["file_copied"];
					
						$content = str_replace(" ", "&nbsp;", $content);
						$content = str_replace("\n", "<br>", $content);
					
						$new_hit = $hit + 1;
						$sql = "update board set hit=$new_hit where num=$num";   
						mysqli_query($con, $sql);
					?>		
							
									<?php
										if($file_name) {
											$real_name = $file_copied;
											$file_path = "DATA/".$real_name;
											$file_size = filesize($file_path);
										}
									?>
										








						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><?=$subject?></h2>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01"><?=$regist_day?></time>
										<a href="#" class="author"><span class="name"><?=$id?></span><img src="images/img_avatar2.png" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="<?=$img_path?>" onerror="this.onerror=null; this.src='images/imgAlt.svg' ;"  style="height:400px; width: 440px; min-width: 140px;"/></span>
	
								<p><?=$content?></p>
								<footer>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
								<button onclick="location.href='ViewTree.php?page=<?=$page?>'">목록</button>
								<?php
									if($userid == $id){
								?>
									
								<button onclick="location.href='board_modify_form1.php?num=<?=$num?>&page=<?=$page?>'">수정</button>
								<button onclick="location.href='board_delete1.php?num=<?=$num?>&page=<?=$page?>'">삭제</button>
								<?php
									}
								?>

							</article>

					</div>

				<!-- Footer -->
					<section id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main1.js"></script>

	</body>
</html>