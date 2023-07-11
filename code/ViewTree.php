

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
		<title>일기 보기 페이지</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main1.css" />  
		<link rel="stylesheet" href="assets/css/menu.css" />
		<link rel="stylesheet" href="assets/css/menutree.css" />
	</head>
	<body class="is-preload">

		
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


				

					<?php
						if (isset($_GET["page"]))
							$page = $_GET["page"];
						else
							$page = 1;

						$con = mysqli_connect("127.0.0.1", "root", "9eexju!@12","WEBDEV1");
						$sql = "select * from board order by num desc";
						$result = mysqli_query($con, $sql);
						$total_record = mysqli_num_rows($result); // 전체 글 수
						$scale = 3;

						// 전체 페이지 수($total_page) 계산 
						if ($total_record % $scale == 0)     -
							$total_page = floor($total_record/$scale);      
						else
							$total_page = floor($total_record/$scale) + 1; 
					
						// 표시할 페이지($page)에 따라 $start 계산  
						$start = ($page - 1) * $scale;      

						$number = $total_record - $start;		
				?>







						


				<!-- Main -->
					<div id="main">								

					<?php

						if($total_record == 0 ){
							echo  "<h3>글이 없어요 ㅠㅠ <br></h3>";
						}

						for ($i=$start; $i<$start+$scale && $i < $total_record; $i++){
							
							mysqli_data_seek($result, $i);
							// 가져올 레코드로 위치(포인터) 이동
							$row = mysqli_fetch_array($result);
							// 하나의 레코드 가져오기

							$category    = $row["category"];
							$num         = $row["num"];
							$id          = $row["id"];
							$name        = $row["name"];
							$subject     = $row["subject"];
							$regist_day  = $row["regist_day"];
							$hit         = $row["hit"];
							$content     = $row["content"];
							$img_path    = "DATA/".$row["file_copied"];
						?>
							
						


						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
									<h2>
										<a href="ViewTree.php?num=<?=$num?>&page=<?=$page?>">
											<a href="board_view1.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a>
										</a>
									</h2>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01"><?=$regist_day?></time>
										<a href="#" class="author"><span class="name"><?=$id?></span>

									</div>


								</header>
								<a href="single.php?num=<?=$num?>&page=<?=$page?>" class="image featured"><img src="<?=$img_path?>" onerror="this.onerror=null; this.src='images/imgAlt.svg' ;"  style="height:400px; width: 440px; min-width: 140px;"/></a>
								<p>
									<?php
													$content=mb_substr($content,0,50);
													echo "$content";
													if(mb_strlen($content)>=50)
													{
												?>
														&nbsp;&nbsp;&nbsp;∙∙∙&nbsp;&nbsp;
												
												<?php	
													}

									?>
								</p>
								<footer>
									<ul class="actions">
										<li><a href="single.php?num=<?=$num?>&page=<?=$page?>" class="button large">더 보기</a></li>
									</ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
						

							<?php
									$number--;  }
							?>

								
						
					
						<!-- Pagination -->
							<ul class="actions pagination">


							<?php
							if ($total_page>=2 && $page >= 2)	
							{
								$new_page = $page-1;

								echo "<li><a href='ViewTree.php?page=$new_page' class='button large previous'>Previous Page</a></li>";
							}		
							else 
								echo "<li><a class='disabled button large previous'>Previous Page</a></li>";
							
								// 게시판 목록 하단에 페이지 링크 번호 출력
							// for ($i=1; $i<=$total_page; $i++)
							// {
							// 	if ($page == $i)     // 현재 페이지 번호 링크 안함
							// 	{
							// 		echo "<b> $i </b>";
							// 	}
							// 	else
							// 	{
							// 		echo "<a href='tradepage.php?page=$i'> $i </a>";
							// 	}
							// }

							if ($total_page>=2 && $page != $total_page)		
							{
								$new_page = $page+1;	
								
								echo "<li><a href='ViewTree.php?page=$new_page' class='button large next'>Next Page</a></li>";
							}
							else 
								echo "<li><a class='disabled button large next'>Next Page</a></li>";
						?>	



							


								
							</ul>

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<header>
									<h2>나의일기 모아보기🐶</h2>
								</header>
							</section>

						<!-- Mini Posts -->


						<?php
						if (isset($_GET["page"]))
							$page = $_GET["page"];
						else
							$page = 1;

						$con = mysqli_connect("127.0.0.1", "root", "9eexju!@12","WEBDEV1");
						$sql = "select * from board where id = '$userid' order by num desc";
						$result = mysqli_query($con, $sql);
						$total_record = mysqli_num_rows($result); // 전체 글 수
						$scale = 5;

						// 전체 페이지 수($total_page) 계산 
						if ($total_record % $scale == 0)     -
							$total_page = floor($total_record/$scale);      
						else
							$total_page = floor($total_record/$scale) + 1; 
					
						// 표시할 페이지($page)에 따라 $start 계산  
						$start = ($page - 1) * $scale;      

						$number = $total_record - $start;		

						if($total_record == 0 ){
							echo  "<h3>글이 없어요 ㅠㅠ <br></h3>";
						}

						for ($i=$start; $i<$start+$scale && $i < $total_record; $i++){
							
							mysqli_data_seek($result, $i);
							// 가져올 레코드로 위치(포인터) 이동
							$row = mysqli_fetch_array($result);
							// 하나의 레코드 가져오기

							$category    = $row["category"];
							$num         = $row["num"];
							$id          = $row["id"];
							$name        = $row["name"];
							$subject     = $row["subject"];
							$regist_day  = $row["regist_day"];
							$hit         = $row["hit"];
							$content     = $row["content"];
							$img_path    = "DATA/".$row["file_copied"];
				
						?>

							<section>
								<div class="mini-posts">

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="single.php"><?=$subject?></a></h3>
												<time class="published" datetime="2015-10-20"><?=$regist_day?></time>
												<a href="#" class="author"></a>
											</header>
											<a href="single.php" class="image">
											<a href="single.php?num=<?=$num?>&page=<?=$page?>" class="image featured"><img src="<?=$img_path?>" onerror="this.onerror=null; this.src='images/imgAlt.svg' ;"/></a>
											</a>
										</article>


										<?php
						}
									mysqli_close($con);
										?>

									

								</div>
							</section>

						

						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>건강한 커뮤니티를 위해서 온라인을 준수 합시다. 에티켓 온라인 에티켓을 준수합시다. 다른 이용자에게 피해를 줄 시 정지 처분 합니다.</p>
								<ul class="actions">
									<li><a href="#" class="button">제작자 Contact</a></li>
								</ul>
							</section>

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