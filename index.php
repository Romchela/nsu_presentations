<html>
<head>
	<title> Доклады ФИТ НГУ </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel = "stylesheet" type = "text/css" href = "http://mephisto.ccfit.ru/~vishnevsky/files/style.css"/>	
</head>

<body>
	<table border="1" width="100%"><tr height="150">
		<td width="100%">
			<center> <h1> Доклады групп 14201 и 14202 ФИТ НГУ </h1> </center>
			<center>
				<a href="index.php?author=nviktorov"><img src="images/nviktorov"></a>

				<!-- тут надо свои фото с ссылками вставить -->

			</center>
		</td>
	</tr></table>

	<table style="table-layout:fixed;" align=center border="0" width="100%"><tr>
		<td width="300" valign="top">

			<table>

			<ul>
				<li><a href="index.php?author=dserov">Обзор современных мобильных операционных систем (Серов Д.)</a><br>
				<li><a href="index.php?author=mkirichenko">Принципы создания компьютерных сетей (Кириченко М.)</a><br>
				<li><a href="index.php?author=lipatkin">Архитектура ЭВМ (Липаткин А.)</a><br>
				<li><a href="index.php?author=nviktorov">Системы контроля версий. SVN (Викторов Н.)</a><br>

				<!-- тут надо вставить ссылки на свои доклады -->
			</ul>
		</td>
		<td width=10>
		</td>
		<td style="word-wrap:break-word;">
			<?php
				if (isset($_GET['author']))
					echo file_get_contents("presentations/".$_GET['author']);
			?>
					
		</td>
		<td width=10>
		</td>
	</tr>
	</table>
</body>
</html>
