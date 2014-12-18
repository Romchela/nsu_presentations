<html>
<head>
	<title> Доклады ФИТ НГУ </title>
</head>

<body>
	<table border="1" width="100%"><tr height="150">
		<td width="100%">
			<center> <h1> Доклады групп 14201 и 14202 ФИТ НГУ </h1> </center>
		</td>
	</tr></table>

	<table border="1" width="100%"><tr>
		<td width="300">
			<?php
				$dir = dir("presentations");
				while (false !== ($str = $dir->read()))
					if ($str{0} != '.') {
						$f = fopen($str, "r");
						$title = fgets($f);
						$name = fgets($f);
						echo "<a href=\"vromchela.myjino.ru/projects/index.php?author=".$author."\">".$title."</a>";
						fclose($f);
					}
				}
				$dir->close();
			?>
		</td>
		<td>
			контент
		</td>
	</tr></table>
</body>
</html>
