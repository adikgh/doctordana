<? include "config/core.php";

	if (isset($_GET['c'])) header('location: /education/sign.php?id='.$_GET['c']);
	else header('location: /education/');