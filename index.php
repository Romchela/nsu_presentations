<?php
/**
 * Short description for index.php
 *
 * @package index
 * @author romchela <romchela@romchelaPC>
 * @version 0.1
 * @copyright (C) 2014 romchela <romchela@romchelaPC>
 * @license MIT
 */


?>
<html>
<head>
	<title> Доклады ФИТ НГУ </title>
</head>

<body>
	<table border="0"><tr>
		<td width="100%">
			<center> Доклады LOL </center>
		</td>
	</tr></table>

	<table border="0"><tr>
		<td width="400">
			<?php
				$d = dir($dir);
				while($str = $d->read()){ 
					if ($str{0} != '.') {
						$f = fopen($str, "r");
						$name = fgets($f);
						echo $name, "<br>";
					}
				} 
				$d->close();
			?>
			
		</td>
		<td width="100%">
			<?php
				if (isset($_GET["author"])) {
					$f = fopen($_GET["author"], "r");
					while($str = fgets($f))
						echo $str;
					fclose($f);
				}
				else
					echo "Выберите статью";
			?>
		</td>
	</tr></table>
</body>
</html>

				

</body>

