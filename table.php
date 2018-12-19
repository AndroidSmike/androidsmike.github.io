<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/stylesheets/main.css">
	<style>
	td { background:<?php $color = $_POST["color"];
	echo $color; ?>;
</style>
<title>C</title>
</head>




<body>

	


	<div class="container">
		<article class="post">
			<div class="post-image"><img src="img/Screenshot_1.png" alt=""></div>
			<div class="post-content">
				<div class="tema"><center><a>Регистрация успешна</a></center></div><br><br>
				<h2></h2>

				<p>
					<?php
					if (isset($_POST["border"]))
						$border = 1;
					else $border = 0;
					echo "<p>".$_POST["title"]."</p>";
					echo "<table border=".$border.">";
					for($i = 1; $i <= $_POST["trcol"]; $i++)
					{
						echo "<tr>";
						for($j = 1; $j <= $_POST["tdcol"]; $j++)
						{
							if ($_POST["type"] == num) echo "<td>".$i.",".$j."</td>";
							else echo"<td>*</td>";
						}
					}
					?>
				</p>


			</div>

		</article>
	</div>



	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</body>
</html>