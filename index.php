<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/stylesheets/main.css">
	<title></title>
	<script language="JavaScript">
		function timer()
		{
			idTimer=window.setTimeout("alert('Время истекло!')", 3000);
		}
	</script>
</head>




<body>

	<header>
		<nav class="container">
			<a href="index.php" class="logo">
				<h1>Лабораторная<br>Работа</h1>
				<ul class="menu">
					<li><a href="Part1.html">Практ.1</a></li>
					<li><a href="Part2.html">Практ.2</a></li>
					
				</ul>
			</a>
		</nav>
	</header>

	<div class="container">
		<div class="content-list">
			<article class="post">
				<div class="post-image"><img src="img/Screenshot_5.png" alt=""></div>
				<div class="post-content">
					<div class="tema"><a href="Part1.html">Листинг 7</a></div>
					<h2>Метод setTimeout</h2>
					<h2><input class="tap" type="button" value="Timer" onClick="timer()"></h2>
					<p>Здесь setTimeout() — это метод объекта Window. Он определяет интервал времени в 3000 мс(3 с) и команду, которая должна выполниться по истечении этого времени. В данном случаеэто вызов окна с сообщением при помощи метода alert: "alert('Время истекло!')".</p>
				</div>
			</article>

			
			<article class="post">
				<div class="post-content">
					<div class="tema"><a href="Part2.html">Часть 5 лабы</a></div>
					<h2>Календарь</h2>
					<p>
						<?php
						$mohths = array( 'Январь','Ферваль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь');
						$mohth=date('n') - 1;
						echo "<h2>$mohths[$mohth]</h2>"; 
						?>
						<table>
			<tr>
				<td>Понедельник</td>
				<td>Вторник</td>
				<td>Среда</td>
				<td>Четверг</td>
				<td>Пятница</td>
				<td>Суббота</td>
				<td>Воскресенье</td>
			</tr>
			<?php
			$n=0;
			$days = date('t');
			$time = mktime(0, 0, 0, date('n'), 1, date('Y')); 
			$dayofweek=date('w', $time); 
			
			while ($n<$days) { 
				for ($k=1; $k<8; $k++){ 
					if ($k==1) {
						echo "<tr>";
					} 
					if ($dayofweek==$k){
						$dayofweek=32;
					} 
					echo "<td>";
					if (($dayofweek== 32)&&($n<$days)){
						$n++; echo "$n";
					} 
					echo "</td>";
					if ($k==7){
						echo "</tr>";
					}
					
				}
			}
			?>
		</table>
					</p>
				</div>
			</article>

			<article class="post">
				<div class="post-image"><img src="img/proslushka.jpg" alt=""></div>
				<div class="post-content">
					<div class="tema"><a href="Part2.html">Листинг 9_10</a></div>
					<h2>Объекты Navigator и Screen</h2>
					<p>
						<b>Характеристики вашего монитора</b><br>
						<script language=javascript>
							var an = navigator.appName;
							var av = navigator.appVersion;
							var acn = navigator.appCodeName;
							var ua = navigator.userAgent;
							var cook = navigator.cookieEnabled;
							var blang = navigator.browserLanguage;
							var slang = navigator.systemLanguage;
							var ulang = navigator.userLanguage;
							var platf = navigator.platform;
							var cpu = navigator.cpuClass;
							document.write('Ширина: '+window.screen.width+'<br>');
							document.write('Полезная ширина: '+window.screen.availWidth+'<br>');
							document.write('Высота: '+window.screen.height+'<br>');
							document.write('Полезная высота: '+window.screen.availHeight+'<br>');
							document.write('Глубина цвета: '+window.screen.colorDepth+'<br><br>');
							document.write("<b>Ваш браузер</b> "+an+" <b>версии</b> "+av+"<br><b>Его кодовое имя</b> "+acn+" <b>и заголовок протокола</b> "+ua+"<br><b>Текущее значение cookies</b>"+cook+"<br><b>Текущий язык браузера </b>"+blang+"<br><b>Язык ОС by default </b>"+slang+"<br><b>Пользовательские настройки языка ОС </b>"+ulang+ "<br><b>Платформа ОС </b>"+platf+"<br><b>Тип процессора вашего компьютера </b>"+cpu)
						</script>
					</p>
				</div>
			</article>

			<article class="post">
				<div class="post-image"><img src="img/1_6qmg5pHSTmwBXLkG4qlbQQ.jpeg" alt=""></div>
				<div class="post-content">
					<div class="tema"><a href="Part3.html">Игра "угадай слово"</a></div>
					<h2>Испытай удачу</h2>
					<p>
						<input class="tap" name="starter" type="button" value="Начать игру" onclick="Game()"><p id="table"></p>
						<script>
							function Game() {
								var pickWord = function () {
									var words = [
									"плющ",
									"банан",
									"день",
									"вкусный",
									"пустой",
									"весело",
									"ягоды",
									"киберспорт",
									"халтурщик",
									"тюрьма",
									"тлен",
									"выход",
									"поддержка",
									"аллергия",
									"ужасы"
									];
									return words[Math.floor(Math.random() * words.length)];
								};
								var setupAnswerArray = function (word) {
									var answerArray = [];
									for (var i = 0; i < word.length; i++) {
										answerArray[i] = "_";
									}
									return answerArray;
								};
								var showPlayerProgress = function (answerArray) {
									alert(answerArray.join(" ") + ". Количество попыток: " + count);
								};
								var getGuess = function () {
									var result = prompt("Угадайте букву, или нажмите Отмена для выхода из игры.");
									if (result === null) {
										return alert("Пока!");
									}
									else {
										return result;
									}
								};
								var updateGameState = function (guess, word, answerArray) {
									var appearances = 0;
									for (var j = 0; j < word.length; j++) {
										if (word[j] === guess) {
											answerArray[j] = guess;
											appearances++;
										}
									}
									return appearances;
								};
								var showAnswerAndCongratulatePlayer = function (answerArray) {
									showPlayerProgress(answerArray);
									alert("Отлично! Было загадано слово " + answerArray.join(""));
									var result = prompt("Введите ваше имя.");
									if (result === null) {
										return alert("Пока!");
									}
									else {
										document.getElementById('table').innerHTML = result + " - " + count + "  " + answerArray.join("");
										return result;
									}
									count = 0;
								};
								var count = 0;
								var word = pickWord();
								var answerArray = setupAnswerArray(word);
								var remainingLetters = word.length;
								while (remainingLetters > 0) {
									showPlayerProgress(answerArray);
									var guess = getGuess();
									if (guess === null) {
										break;
									} else if (guess.length !== 1) {
										alert("Пожалуйста, введите одиночную букву.");
									} else {
										var correctGuesses = updateGameState(guess, word, answerArray);
										remainingLetters -= correctGuesses;
									}
									count ++;
								}
								showAnswerAndCongratulatePlayer(answerArray);
							}
						</script>
					</p>
				</div>
			</article>
		</div>

		<aside>

			<div class="sidebar">
				<h3 class=sidebar-title>Поисковик</h3>
				<div class="sidebar-text">
					<p>
						<form name="find">
							Найти:<br>
							<input type="text" name="searchtext"><br><br>
							<input type="checkbox" name="newwin">Открыть в новом окне <br>
							<input type="checkbox" name="ifmo">Искать на www.ifmo.ru
							<br>
							<br>С помощью поисковой системы:<br>
							<input type="button" value="Yandex" onClick="FindText(UrlYandex)">
							<input type="button" value="Mail" onClick="FindText(UrlMail)">
							<input type="button" value="Google" onClick="FindText(UrlGoogle)">
						</form> 
						<script>
							UrlYandex="http://www.yandex.ru/yandsearch?rpt=rad&text=";
							UrlMail="https://go.mail.ru/search?q=";
							UrlGoogle="http://www.google.ru/search?hl=ru&newwindow=1&q=";
							UrlYandexIfmo="https://www.yandex.ru/yandsearch?site=www.ifmo.ru&rpt=rad&text=";
							UrlMailIfmo="https://go.mail.ru/search?q=site:ifmo.ru%20";
							UrlGoogleIfmo="https://www.google.ru/search?as_sitesearch=www.ifmo.ru&as_q=";

							function FindText(Url)
							{
								if (document.find.ifmo.checked){

									if (Url=="http://www.yandex.ru/yandsearch?rpt=rad&text=")
									{
										Url=UrlYandexIfmo;
									}
									if (Url=="https://go.mail.ru/search?q=")
									{
										Url=UrlMailIfmo;				
									}
									if (Url=="http://www.google.ru/search?hl=ru&newwindow=1&q=")
									{
										Url=UrlGoogleIfmo;
									}
									var FullUrl=Url+document.find.searchtext.value;
								}
								else
								{
									var FullUrl=Url+document.find.searchtext.value;
								}
								if (document.find.newwin.checked)
								{
									var FindWin=window.open(FullUrl);
								}
								else
								{
									location.href = FullUrl;
								}
							}
						</script>
					</p>
				</div>
			</div>

			<div class="sidebar">
				<h3 class=sidebar-title>Текущее время: <span id='time'>00:00:00</span><br>
					<script>
						setInterval("showtime(document.getElementById ('time'))", 1000)
						function showtime(object)
						{
							var date = new Date()
							object.innerHTML = date.toTimeString().substr(0,8)
						}
					</script>
				</h3>
				<div class="sidebar-text">
					<p>Метод setInterval</p>
				</div>
			</div>

			<div class="sidebar">
				<h3 class=sidebar-title> Таблица<br></h3>
				<div class="sidebar-text">
					<p>
						<form name="tabl" method="POST" action="table.php">
							<table border=0>
								<tr><td>Введите название таблицы: <input type="text" name="title" value = ""></td></tr>
								<tr><td>Выберите цвет фона:
									<select name="color" size="1">
										<option value="red">Красный</option>
										<option value="blue">Синий</option>
										<option value="yellow">Желтый</option>
										<option value="green">Зеленый</option>
										<option value="white">Белый</option>
									</select></td></tr>
									<tr><td>Чем заполнять таблицу:<br>
										<input name="type" type="radio" value="star"/>Звездочки <br>
										<input name="type" type="radio" value="num"/>Номерами столбцов и строк </td></td></tr>
										<tr><td>Границы: <input name="border[]" type="checkbox" value=""/></td></tr>
										<tr><td>Кол-во столбцов<input type="text" name="tdcol" value = ""></td><tr>
											<td>Кол-во строк<input type="text" name="trcol" value = ""></td></tr>
											<tr><td><input type=submit value="Создать таблицу"></td></tr>
										</table>
									</form>
								</p>
							</div>
						</div>

			<div class="sidebar">
				<h3 class=sidebar-title>Использование свойства lastModified</h3>
				<div class="sidebar-text">
					<script language="JavaScript">
						document.write("<b>Последний раз страница редактировалась:</b><br><br>" +document.lastModified)
					</script>
				</div>
			</div>

			<div class="sidebar">
				<h3 class=sidebar-title> Таймер</h3>
				<div class="sidebar-text">
					<p><script type="text/javascript">
						function trim(string) {
							return string.replace(/\s+/g, " ").replace(/(^\s*)|(\s*)$/g, '');
						}
						var init = 0;
						var startDate;
						var clocktimer;
						function StopTime() {
							clearInterval(clocktimer);
						}
						function clearFields() {
							init = 0;
							clearTimeout(clocktimer);
							document.clockform.clock.value = '00:00:00.00';
						}
						function clearALL() {
							clearFields();
							document.getElementById('marker').innerHTML = '';
						}
						function startTIME() {
							var thisDate = new Date();
							var t = thisDate.getTime() - startDate.getTime();
							var ms = t % 1000;
							t -= ms;
							ms = Math.floor(ms / 10);
							t = Math.floor(t / 1000);
							var s = t % 60;
							t -= s;
							t = Math.floor(t / 60);
							var m = t % 60;
							t -= m;
							t = Math.floor(t / 60);
							var h = t % 60;
							if (h < 10)
								h = '0' + h;
							if (m < 10)
								m = '0' + m;
							if (s < 10)
								s = '0' + s;
							if (ms < 10)
								ms = '0' + ms;
							if (init === 1)
								document.clockform.clock.value = h + ':' + m + ':' + s + '.' + ms;
							clocktimer = setTimeout("startTIME()", 10);
						}
						function findTIME() {
							startDate = new Date();
							startTIME();
							init = 1;
						}
						function addTime() {
							document.getElementById('marker').innerHTML = document.clockform.clock.value + '<br>' + document.getElementById('marker').innerHTML;
						}
					</script>
					<noscript>
						<p>Извините, для работы приложения нужен включённый JavaScript</p>
					</noscript>
					<form name="clockform">
						<p>
							Время:
							<input class="tap" name="clock" size="12" maxlength="12" value="00:00:00.00">
							<input class="tap" name="starter" type="button" value="Старт" onclick="findTIME()">
							<input class="tap" name="starter" type="button" value="Стоп" onclick="StopTime()">
							<input class="tap" name="adder" type="button" value="Добавить" onclick="addTime()">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input class="tap" name="clearer" type="button" value="Сбросить всё" onclick="clearALL()">
						</p>
						<p id="marker">
						</p>
					</form></p>
				</div>
			</div>

			<div class="sidebar">
				<h3 class=sidebar-title>Таблица времени</h3>
				<div class="sidebar-text">
					<script>
						function time(shift){
							var currentDate = new Date();
							var currentDate = new Date();
							var currentMillis = currentDate.getTime();
							var hourMillis = 60 * 60 * 1000;
							var h=new Date(currentMillis + hourMillis * shift);
							var k=h.toString();
							k=k.substr(16,8);
							return (k);
						}
						function table(){
							var table = '<table class="simple-little-table" border=1>';
							table=table+"<tr>"+"<td>"+"Гринвич"+"</td>"+"<td>"+time(-3)+"</td>"+"</tr>";
							table=table+"<tr>"+"<td>"+"Калининград"+"</td>"+"<td>"+time(-1)+"</td>"+"</tr>";
							table=table+"<tr>"+"<td>"+"Москва"+"</td>"+"<td>"+time(0)+"</td>"+"</tr>";
							table=table+"<tr>"+"<td>"+"Самара"+"</td>"+"<td>"+time(1)+"</td>"+"</tr>";
							table=table+"<tr>"+"<td>"+"Екатиринбург"+"</td>"+"<td>"+time(2)+"</td>"+"</tr>";
							table=table+"<tr>"+"<td>"+"Владивосток"+"</td>"+"<td>"+time(7)+"</td>"+"</tr>";
							document.getElementById('tab').innerHTML = table;	
						}
						function going(){
							setInterval(table,1000);
						}
					</script>
					<input class="tap" name="starter" type="button" value="Показать таблицу" onclick="going()"><p id="tab"></p>
				</div>
			</div>

		</aside>
	</div>

	<footer>
		<div class="container">
			<div class="footer-my"><span>leonov © 2018</span></div>
			<div class="footer-letter">
				<a href="mailto:leonov.itmo@outlook.com">Написать письмо автору</a>
			</div>
		</div>
	</footer>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

	<div class="test-block"></div>
</body>
</html>