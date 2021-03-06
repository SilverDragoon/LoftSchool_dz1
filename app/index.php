<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ru-Ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Главная страница</title>
	<!-- SEO-->
	<meta name="description" content="LoftSchool Dz1 Artem Danshin">
	<meta name="keywords" content="LoftSchool,dz1,artem,danshin">
	<meta name="author" content="Artem Danshin">
	<!-- favicon.ico-->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
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
								<a href="" class="navigation-link">Обо мне</a>
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
						<h2 class="aboutbox-header">Основная информация</h2>
						<div class="aboutbox-body clearfix">
							<div class="image-wrap">
								<div class="avatar-box"><img src="img/face.jpg" alt="Аватар Артёма Даньшина" class="avatar"></div>
							</div>
							<div class="worksheet-wrap">
								<ul class="worksheet-list">
									<li class="worksheet-item clearfix">
										<div class="worksheet-what">Меня зовут:</div>
										<div class="worksheet-info">Артём Даньшин <?php echo $_SESSION['username']; ?></div>
									</li>
									<li class="worksheet-item clearfix">
										<div class="worksheet-what">Мой возраст:</div>
										<div class="worksheet-info">23</div>
									</li>
									<li class="worksheet-item clearfix">
										<div class="worksheet-what">Мой город:</div>
										<div class="worksheet-info">Москва</div>
									</li>
									<li class="worksheet-item clearfix">
										<div class="worksheet-what">Моя специализация:</div>
										<div class="worksheet-info">FrontEnd разработчик</div>
									</li>
									<li class="worksheet-item clearfix">
										<div class="worksheet-what skills-head">Ключевые навыки:</div>
										<div class="worksheet-info skills">
											<ul class="skills-list">
												<!-- Временно картинки-->
												<li class="skill-item">HTML</li>
												<li class="skill-item">CSS</li>
												<li class="skill-item">JAVASCRIPT</li>
												<li class="skill-item">GIT</li>
												<li class="skill-item">GULP</li>
												<li class="skill-item">PHP</li>
												<li class="skill-item">SCSS</li>
												<li class="skill-item">JADE</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</section>
					<section class="aboutbox">
							<h2 class="aboutbox-header">Опыт работы</h2>
							<div class="aboutbox-body">
								<ul class="aboutbox-list">
									<li class="aboutbox-item icon-work">
											<div class="where">"Московский Технический Университет Связи и Информатики" - Техник/Звукорежиссер/Светорежиссер"</div>
											<div class="period">Апрель 2010 - Октябрь 2012</div>
									</li>
									<li class="aboutbox-item icon-work">
											<div class="where">"Московский Технический Университет Связи и Информатики" - Фотограф</div>
											<div class="period">Октябрь 2012 - Июнь 2014</div>
									</li>
									<li class="aboutbox-item icon-work">
											<div class="where">"ФГУП ВГТРК" - Инженер 1-ой категории</div>
											<div class="period">апрель 2012 - По настоящее время</div>
									</li>
								</ul>
							</div>
					</section>
					<section class="aboutbox">
							<h2 class="aboutbox-header">Образование</h2>
							<div class="aboutbox-body">
								<ul class="aboutbox-list">
									<li class="aboutbox-item icon-school">
										<div class="where">Полное среднее. ГБУ СОШ №1061</div>
										<div class="period">1998 - 2008</div>
									</li>
									<li class="aboutbox-item icon-graduate">
										<div class="where">Высшее. Московский Технический Университет Связи и Информатики</div>
										<div class="period">2008 - 2013</div>
									</li>
									<li class="aboutbox-item icon-file">
										<div class="where">Курсы LoftSchool</div>
										<div class="period">Сентябрь 2015 - По настоящее время</div>
									</li>
								</ul>
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