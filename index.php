<html>
<head>
	<title> Доклады ФИТ НГУ </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
	<table border="1" width="100%"><tr height="150">
		<td width="100%">
			<center> <h1> Доклады групп 14201 и 14202 ФИТ НГУ </h1> </center>
		</td>
	</tr></table>

	<table border="1" width="100%"><tr>
		<td width="300">
			<ul>
			<?php
				$dir = dir("presentations");
				while (false !== ($str = $dir->read())) {
					if ($str{0} != '.') {
						$f = fopen("presentations/".$str, "r");
						$title = fgets($f);
						$author = fgets($f);
						echo "<li><a href=\"index.php?author=".$author."\">".$title."</a></li>";
						fclose($f);
					}
				}
				$dir->close();
			?>
			</ul>
		</td>
		<td>
			<?php
				if ($_GET['author'] == "dserov") {
					foreach(file("presentations/dserov") as $i) {
						echo $i;
					}
				}
			?>
					
		</td>
	</tr>
	</table>
</body>
</html>
