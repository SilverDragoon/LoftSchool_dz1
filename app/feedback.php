<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ru-Ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Обратная связь</title>
	<!-- SEO-->
	<meta name="description" content="LoftSchool Dz1 Artem Danshin">
	<meta name="keywords" content="LoftSchool,dz1,artem,danshin">
	<meta name="author" content="Artem Danshin">
	<!-- favicon.ico-->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- bower CSS -->
	<link rel="stylesheet" type="text/css" href="bower/normalize-css/normalize.css">
	<link rel="stylesheet" type="text/css" href="bower/qtip2/jquery.qtip.css">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="fonts/opensans.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/feedback.css">
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
							<li class="navigation-item">
								<a href="index.php" class="navigation-link">Обо мне</a>
							</li>
							<li class="navigation-item">
								<a href="my_work.php" class="navigation-link">Мои Работы</a>
							</li>
							<li class="navigation-item current">
								<a href="" class="navigation-link">Обратная связь</a>
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
					<section class="feedbox">
						<h2 class="feedbox-header">У вас интересный проект? Напишите мне!</h2>
						<div class="feedbox-body">
							<form action="" id="feedback-form" name="feedback">
								<div class="feedform clearfix">
									<div class="feedname">
										<div class="feed-head">Имя</div>
										<input class="feed-input name" id="feed-form-name" type="text" name="name" placeholder="Как к Вам обращаться" qtip-content="введите имя" qtip-position="left">
									</div>
									<div class="feedmail">
										<div class="feed-head">Email</div>
										<input class="feed-input mail" id="feed-form-mail" type="text" name="mail" placeholder="Куда мне писать" qtip-content="введите email" qtip-position="rigth">
									</div>
									<div class="feedmessage">
										<div class="feed-head">Сообщение</div>
										<textarea class="feed-input message"  id="feed-form-message" type="text" name="message" placeholder="Кратко в чем суть" qtip-content="ваш вопрос" qtip-position="left"></textarea>
									</div>
									<div class="feedcapcha clearfix">
										<div class="feed-head">Введите код, указанный на картинке</div>
										<div class="capchabody">
											<div class="wrap-capchaimg">
												<div class="capchaimg"></div>
											</div>
											<div class="wrap-capcha-input">
												<input class="feed-input capcha"  id="feed-form-capcha" type="text" name="capcha" placeholder="Введите код" qtip-content="код капчи" qtip-position="rigth">
											</div>
										</div>
									</div>
									<div class="feedbuttons clearfix">
										<div class="wrap-button-submit">
											<input class="button-submit" type="submit" value="Отправить">
										</div>
										<div class="wrap-button-clear">
											<input class="button-clear" type="reset" value="Очистить">
										</div>
									</div>
								</div>
							</form>
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
	<script src="bower/jquery-placeholder/jquery.placeholder.min.js"></script>
	<script src="bower/qtip2/jquery.qtip.min.js"></script>
	<script src="js/validation.js"></script>
	<script src="js/feedback.js"></script>
</body>
</html>