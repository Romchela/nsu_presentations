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
	<title> Presentations FIT NSU </title>
</head>

<body>
	<table border="1"><tr height="300">
		<td width="100%">
			<center> Presentations LOL </center>
		</td>
	</tr></table>

	<table border="1"><tr>
		<td width="400">
			<?php
				$d = dir("presentations");
				while($str = $d->read()){ 
					if ($str{0} != '.') {
						$f = fopen("presentations/".$str, "r");
						if ($f === false)
							echo "Fail to open";
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
					echo "Choose your hero";
			?>
		</td>
	</tr></table>
</body>
</html>

				

</body>

