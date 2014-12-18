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

	<table style="table-layout:fixed;" align=center border="1" width="100%"><tr>
		<td width="300" valign="top">
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
		<td style="word-wrap:break-word;">
			<?php
				if ($_GET['author'] == "dserov") {
					$count = 0;
					foreach(file("presentations/dserov") as $i) {
						$count++;
						if (($count == 1) || ($count == 2))
							continue;
						echo $i;
					}
				}
				if ($_GET['author'] == "mkirichenko"){
					$mk_webpage = file_get_contents('presentation/mkirichenko.html');
					echo $mk_webpage;
				}
			?>
					
		</td>
	</tr>
	</table>
</body>
</html>
