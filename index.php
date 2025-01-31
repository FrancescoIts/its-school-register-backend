<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro Elettronico</title>
        <meta name="description" content="">
		<meta name="keywords" content="registro, its, smart academy, its smart academy">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/login.css">
        <link rel="shortcut icon" href="./img/favicon.ico">
    </head>
    <body>
    <div class="header-image">
            <img src="./img/logo.png" alt="Logo">
        </div>
        <button id="theme-toggle" class="theme-toggle">🌙 Tema Scuro</button>

    <div class="container">
	<div class="screen">

		<div class="screen__content">
		<h1 class="login-title">Registro Elettronico</h1>
			<form class="login">
				
			<div class="login__field">
				
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Email Scolastica">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password">
				</div>
				<button class="button login__submit">
					<span >ACCEDI</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<div class="social-login">
            <div class="col-md-3">
                        <a href="" class="login-with-google-btn">Google</a>
                    </div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
        <script src="./js/main.js"></script>
		<?php require('./footer.php')  ?>
    </body>
</html>