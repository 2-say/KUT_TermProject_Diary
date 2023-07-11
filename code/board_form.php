

<html>
	<script>
		function check_input() {
			if (!document.board_form.subject.value)
			{
				alert("제목을 입력하세요!");
				document.board_form.subject.focus();
				return;
			}
			if (!document.board_form.content.value)
			{
				alert("내용을 입력하세요!");    
				document.board_form.content.focus();
				return;
			}
			document.board_form.submit();
		 }
	  </script>


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

	$con = mysqli_connect("127.0.0.1", "root", "9eexju!@12","WEBDEV1");
	$today = date("Y-m-j");
	$sql = "select * FROM board where (id='$userid') AND (regist_day='$today')";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수
	if($total_record>=1)
	{
	?>	
	<h1><?=$today?></h1>
	<script>
		alert('오늘 이미 일기를 작성했습니다!');
		history.go(-1)
		</script>
<?php	
	}
	mysqli_close($con);
	?>	







<!DOCTYPE HTML>

<html>
	
	<head>
		<title>Diary mate📖</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main1.css" />
		<link rel="stylesheet" href="assets/css/menutree.css" />
		<link rel="stylesheet" href="assets/css/menu.css" />
	</head>


	<body class="single is-preload">
	<?php	
	if ( !$userid )
					{
						echo("
									<script>
									alert('게시판 글쓰기는 로그인 후 이용해 주세요!');
									history.go(-1)
									</script>
						");
								exit;
					}

		?>
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
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
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
							</section>

				<!-- Main -->
					<div id="main">
						<!-- Post -->
						<form  name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data">
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">제목:</a></h2>
										<input name="subject" type="text" placeholder="제목을 입력해주세요.">
									</div>

									<div class="meta">
										<time class="published" datetime="2015-11-01"><?=date("y 년 m 월 d 일")?></time>
										<a href="#" class="author"><span class="name"><?=$userid?></span></a>
										
											<select name="feeling" >
												<option value="soso">오늘의 기분은?</option>
												<option value="happy">매우 좋아 😃</option>
												<option value="soso">그냥 그래 🙂</option>
												<option value="angry">화나 😡</option>
												<option value="sad">슬퍼 🥲</option>
											</select>
										
									</div>
								</header>

								<div class="box">
								<span class="imagefile"><input type="file" name="upfile"></span>
								</div>
										
								<label for="content1">내용</label>
								<textarea name="content" class="form-control" rows="5" name="content" id="content" placeholder="내용을 입력해 주세요" ></textarea>
								<br>

								<ul class="buttons">
									<ui><button type="button" onclick="check_input()">완료</button>
									<button type="button" onclick="location.href='ViewTree.php'">목록</button></ui>
								</ul>
								
							</article>
						</form>
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