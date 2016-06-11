<?php
	$data=shell_exec("sudo /var/www/html/dowork 4 학교불");
	shell_exec("sudo /var/www/html/dowork 6");
	echo $_GET['callback'].'('.json_encode($data).')';
?>
