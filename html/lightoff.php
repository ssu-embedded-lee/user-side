<?php
	$data=shell_exec("sudo /var/www/html/dowork 7 학교불꺼");
	echo $_GET['callback'].'('.json_encode($data).')';
?>
