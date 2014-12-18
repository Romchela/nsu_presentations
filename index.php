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
	<title> Доклады групп 14201-14202 ФИТ НГУ  </title>
</head>

<body>
	<table border="1" width="100%"><tr height="150">
		<td width="100%">
			<center> Доклады гурпп 14201-14202 ФИТ НГУ </center>
		</td>
	</tr></table>

	<table border="1" width="100%"><tr>
		<td width="400px">
			<?php
				$d = dir("presentations");
				while($str = $d->read()){ 
					if ($str{0} != '.') {
						$f = fopen("presentations/".$str, "r");
						if ($f === false)
							echo "Fail to open";
						$title = fgets($f);
						$author = fgets($f);
						echo "<a href=\"vromchela.myjino.ru/projects/index.php?author=".$author."\">".$title."</a>";
					}
				} 
				$d->close();
			?>
			
		</td>
		<td>
			<?php
				if (isset($_GET["author"])) {
					$f = fopen($_GET["author"], "r");
					while($str = fgets($f))
						echo $str;
					fclose($f);
