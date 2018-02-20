<?php

if (isset($_GET)) {

	/*echo "<br/>";
		print_r ($_GET);
	echo "<br/>";*/

	// 1 varijanta
	foreach ($_GET["food"] as $value) {
		echo $value;
		echo "<br/>";
	}

	// 2 varijanta
	echo implode(",",$_GET["food"]);
}

?>