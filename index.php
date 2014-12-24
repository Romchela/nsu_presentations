<html>
<head>
	<title> Доклады ФИТ НГУ </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel = "stylesheet" type = "text/css" href = "http://mephisto.ccfit.nsu.ru/~vishnevsky/files/style.css"/>
</head>

<body>
	<table border="0" width="100%"><tr height="150">
		<td width="100%">
			<center> <h1> Доклады групп 14201 и 14202 ФИТ НГУ </h1> </center>
		</td>
	</tr></table>

	<table style="table-layout:fixed;" align=center border="0" width="100%"><tr>
		<td width="30%" valign="top">

			<ul>
				<li><a href="index.php?author=vishnevsky">Язык программирования Python<br><b>Вишневский Р.</b></a><br>
				<li><a href="index.php?author=dserov">Обзор современных мобильных операционных систем<br><b>Серов Д.</b></a><br>
				<li><a href="index.php?author=mkirichenko">Принципы создания компьютерных сетей<br><b>Кириченко М.</b></a><br>
				<li><a href="index.php?author=lipatkin">Архитектура ЭВМ <br><b>Липаткин А.</b></a><br>
				<li><a href="index.php?author=nviktorov">Системы контроля версий. SVN <br><b>Викторов Н.</b></a><br>
				<li><a href="index.php?author=semushenko">Беспроводная передача данных<br><b>Семушенко Е.</b></a><br>
				<li><a href="index.php?author=kmarchenko">Облачные сервисы<br><b>Марченко К.</b></a><br>
				<li><a href="index.php?author=binder">Объектно-ориентированное программирование<br><b>Биндер С.</b></a><br>
				<li><a href="index.php?author=im">Антивирусные программы<br><b>Им М.</b></a><br>
				<li><a href="index.php?author=saltuk">Классификация языков программирования<br><b>Салтук К.</b></a><br>
				<li><a href="index.php?author=boldakov">HTML 5<br><b>Болдаков В.</b></a><br>
			</ul>

		</td>
		<td width=10>
		</td>
		<td valign=top style="word-wrap:break-word;">
			<?php
				if (isset($_GET['author']))
					echo file_get_contents("presentations/".$_GET['author']);
				else {
					echo "Hello world!";
				}
			?>

		</td>
		<td width=10>
		</td>
	</tr>
	</table>
	<br><br>
	<hr>
	<center><b>FIT NSU 2014 (c)</b></center>
</body>
</html>
