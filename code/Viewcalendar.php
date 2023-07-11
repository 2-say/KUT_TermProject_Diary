<!DOCTYPE HTML>

<html>
	
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

	<?php
		if ( !$userid )
							{
								echo("
											<script>
											alert('감정 달력 페이지는 로그인 후 이용해 주세요!');
											history.go(-1)
											</script>
								");
										exit;
							}

				?>








	<head>
		<title>달력 보기 페이지</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main1.css" />
		<link rel="stylesheet" href="assets/css/menu.css" />
		<link rel="stylesheet" href="assets/css/menutree.css" />
		<link rel="stylesheet" href="assets/css/calendar.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body class="single is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
				<header id="header">
					<h1><a href="index.php">Diary Mate 📚</a></h1>
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

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
							<li><a href="index.php">Home</a></li>
							<li><a href="ViewTree.php">숲 보기</a></li>
							<li><a href="tree.php">나무 작성</a></li>
							<li><a href="Viewcalendar.php">감정 캘린더</a></li>
						</ul>

					
					<ul class="actions stacked">
						<li><a href="#" class="button primary fit">Get Started</a></li>
						<li><a href="login_form.php" class="button fit">Log In</a></li>
					</ul>
				</nav>

				<!-- Main -->
					<div id="main">
						


					
						<!-- Post -->
							<article class="post1">
								<div id="calendar">
									<!-- 달력 월 -->
									<div id="current_day">
										<p>12월</p>
										<p><strong>Calendar</strong></p>
									</div>
									
									
									<div id="week-container">
										<div id="week">
											 

									<?php
										$WeekDay = array("MONDAY", "TUESDAY", "WENSDAY","THURSDAY","FRIDAY","STURDAY","SUNDAY");
										
										$count = 0;
										for ($i=0; $i<31; $i++){
											$a=$i+1;
										
									?>
								
								
								<!-- 주간 -->
									
											<input type="radio" id="day-<?=$i?>" name="day" />
											 <label for="day-<?=$i?>">
												<p><span class="dotw"><?=$WeekDay[$count]?></span><span class="date"><?=$a?></span></p>
												<div>
												<?php
														
														$con = mysqli_connect("127.0.0.1", "root", "9eexju!@12","WEBDEV1");
														// $sql = "select DISTINCT num,filling from board where id='$userid' AND SUBSTRING(regist_day,8,2) ='$number_day[$i]'";
														$sql = "select * FROM board where (id='$userid') AND (SUBSTR(regist_day,9,2)='$a')";
														$result = mysqli_query($con, $sql);
														$total_record = mysqli_num_rows($result); // 전체 글 수
															$row = mysqli_fetch_array($result);
															if($total_record == 0 ){
																echo  "<h3>글이 없어요<br></h3>";
																$num         ="";
																$regist_day  ="";
																$feeling 	 ="";
															}
															else{
															

															$num         = $row["num"];
															$regist_day  = $row["regist_day"];
															$feeling 	 = $row["feeling"];
														
															}
															if($feeling =="angry")
															{
																?>
																<a href="single.php?num=<?=$num?>&page=<?=$page?>">
																<div class="images">
																<img src="images/angry.jpg" /></div>
																</a>
															<?php
															}
															elseif($feeling=="happy")
															{
																?>
																<a href="single.php?num=<?=$num?>&page=<?=$page?>">
																<div class="images">
																<img src="images/happy.jpg" /></div>
																</a>
															<?php
															}
															elseif($feeling=="sad")
															{
																?>
																<a href="single.php?num=<?=$num?>&page=<?=$page?>">
																<div class="images">
																<img src="images/sad.jpg" /></div>
																</a>
															<?php
															}
															elseif($feeling=="soso")
															{
																?>
																<a href="single.php?num=<?=$num?>&page=<?=$page?>">
																<div class="images">
																<img src="images/soso.jpg" /></div>
																</a>
															<?php
															}
															else
															{
																?>
																<div class="images">
																<img src="images/No_diary.jpg" /></div>
															<?php
															}
															mysqli_close($con);
													
													?>
												
											
												</div>
											</label>


											
									<?php
									$count=$count+1;
									if($count==6)
									{
										$count=0;
									}
									
										}	
									?>
											
										</div>
									</div>


									


								</div>





























							</article>
					</div>
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