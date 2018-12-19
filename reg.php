<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/stylesheets/main.css">
	<title>C</title>
</head>




<body>

	


	<div class="container">
		<article class="post">
			<div class="post-image"><img src="img/Screenshot_1.png" alt=""></div>
			<div class="post-content">
				<div class="tema"><center><a>Регистрация успешна</a></center></div><br><br>
				<h2></h2>

				<p>Уважаемый(ая)
					<?php
					echo "<i><b>";
					echo $_POST["_name"];
					echo " ";
					echo $_POST["Reg_surname"];
					echo "</i></b></p>";
					echo "<p>Вы успешно зарегистрировались на нашем сайте. </p>";
					echo "</i></b></p><p>E-mail: <i><b>";
					echo $_POST["Reg_email"];
					echo "<p>Ваш логин: <i><b>";
					echo $_POST["Reg_login"];			
					echo "</i></b></p><p>Ваш пароль: <i><b>";
					echo $_POST["Reg_pass1"];
					echo "</i></b></p><p>Ваша страна: <i><b>";
					echo $_POST["Reg_Place"];
					echo "</i></b></p><p>Ваш пол: <i><b>";
					echo $_POST["Gender"];
					echo "</i></b></p>";
					?>
				</p>


			</div>

		</article>
	</div>



	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</body>
</html>