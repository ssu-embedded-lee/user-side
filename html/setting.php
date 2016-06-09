<?php
	$data=shell_exec("sudo /var/www/html/dowork 4 학교");
	echo $_GET['callback'].'('.json_encode($data).')';
?>
