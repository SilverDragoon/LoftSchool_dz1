<?php
	session_start();

	if (isset($_POST['username'])) {
		if ( ($_POST['username'] == 'root') && ($_POST['password']) == '1234') {
			$_SESSION['username'] = 'root';
			echo '<script>document.location.href = "index.php";</script>';
		}
	}
?>
<!DOCTYPE html>
<html lang="ru-Ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Страница авторизации</title>
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
	<link rel="stylesheet" type="text/css" href="css/auth.css">
	<!-- modernizer-->
	<script src="bower/modernizer/modernizr.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="main-content">
			<div class="wrap-auth">
				<p class="auth-head">Авторизуйтесь</p>
				<div class="wrap-auth-form">
					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<div class="wrap-auth-form-inner">
							<div class="wrap-auth-input">
								<input type="text" class="auth-input" name="username" placeholder="Введите Email" qtip-content="введите email" qtip-position="rigth">
								<div class="auth-input-img mail"></div>
							</div>
							<div class="wrap-auth-input">
								<input type="text" class="auth-input" name="password" placeholder="Введите пароль" qtip-content="введите пароль" qtip-position="rigth">
								<div class="auth-input-img password"></div>
							</div>
							<div class="auth-remember">
									<input type="checkbox" class="auth-remember-checkbox" name="remember" id="remember_me">
									<label class="auth-remember-head" for="remember_me"><span></span>Запомнить меня?</label>
							</div>
							<div class="wrap-auth-button">
								<input type="submit" class="auth-button" value="Войти">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer class="page-footer">
		<div class="container">
			<div class="lock">
				<a href="auth.html" class="lock-inner">вход</a>
			</div>
			<div class="copyright">2015, Это сайт Артёма Даньшина, пожалуйста, не копируйте и не воруйте его
			</div>
		</div>
	</footer>
	<script src="bower/jquery/dist/jquery.js"></script>
	<script src="bower/jquery-placeholder/jquery.placeholder.min.js"></script>
	<script src="bower/qtip2/jquery.qtip.min.js"></script>
	<script src="js/validation.js"></script>
	<script src="js/auth.js"></script>
</body>
</html>