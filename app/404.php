<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ru-Ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Страница не найдена 404</title>
	<!-- SEO-->
	<meta name="description" content="LoftSchool Dz1 Artem Danshin">
	<meta name="keywords" content="LoftSchool,dz1,artem,danshin">
	<meta name="author" content="Artem Danshin">
	<!-- favicon.ico-->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<!-- bower CSS -->
	<link rel="stylesheet" type="text/css" href="bower/normalize-css/normalize.css">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="fonts/opensans.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
	<!-- modernizer-->
	<script src="bower/modernizer/modernizr.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="main-content">
			<header class="page-header">
				<div class="container-big">
					<a class="header-logo-link" href="index.html">
						<img src="img/logo.png" height="71" width="95" alt="logo" class="logo-img">
						<span class="header-logo-text">Сайт портфолио Артёма Даньшина</span>
					</a>
					<ul class="socials">
						<li class="socials-item">
							<a href="http://vk.com/silver_dragoon" target="_blank" class="socials-link vk">vk.com</a>
						</li>
						<li class="socials-item">
							<a href="https://twitter.com/SilverDragoonDJ" target="_blank" class="socials-link tw">twitter.com</a>
						</li>
						<li class="socials-item">
							<a href="https://www.facebook.com/silverdragoon" target="_blank" class="socials-link fb">facebook.com</a>
						</li>
						<li class="socials-item">
							<a href="https://github.com/SilverDragoon" target="_blank" class="socials-link git">github.com</a>
						</li>
					</ul>
				</div>
			</header>
			<div class="container">
				<!-- Сайдбар -->
				<aside class="sidebar">
					<nav class="navigation">
						<ul class="navigation-list">
							<li class="navigation-item current">
								<a href="index.php" class="navigation-link">Обо мне</a>
							</li>
							<li class="navigation-item">
								<a href="my_work.php" class="navigation-link">Мои Работы</a>
							</li>
							<li class="navigation-item">
								<a href="feedback.php" class="navigation-link">Обратная связь</a>
							</li>
						</ul>
					</nav>
					<address class="contacts">
						<h2 class="contacts-header">Контакты</h2>
						<div class="contacts-body">
							<ul class="contacts-list">
								<li class="contacts-item">
									<a href="mailto:silvir007@gmail.com" class="link mail">silvir007@gmail.com</a>
								</li>
								<li class="contacts-item">
									<a href="tel:+79162277100" class="link phone">+79162277100</a>
								</li>
								<li class="contacts-item">
									<a href="skype:silver.dragoon" class="link skype">silver.dragoon</a>
								</li>
							</ul>
						</div>
					</address>
				</aside>
				<!-- Изменяемый контент-->
				<div class="variable-content">
					<section class="aboutbox">
						<h2 class="aboutbox-header">Страница не найдена 404</h2>
						<div class="aboutbox-body clearfix">
							
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	<footer class="page-footer">
		<div class="container">
			<div class="lock">
				<?php
					if ( !isset($_SESSION['username']) ) {
						echo '<a href="auth.php" class="lock-inner">вход</a>';
					} else {
						echo '<a href="php/logout.php" class="lock-inner">выход</a>';
					}
				?>
			</div>
			<div class="copyright">2015, Это сайт Артёма Даньшина, пожалуйста, не копируйте и не воруйте его
			</div>
		</div>
	</footer>
	<script src="bower/jquery/dist/jquery.js"></script>
	<script src="js/main.js"></script>
</body>
</html>