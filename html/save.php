<?php
	$data=shell_exec("sudo /var/www/html/dowork 1");
	echo $_GET['callback'].'('.json_encode($data).')';
?>
