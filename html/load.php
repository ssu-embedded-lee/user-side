<?php
	$data = system("sudo /var/www/html/dowork 2");
	
	$f = fopen("/var/www/html/loadData.txt", "r");

	ob_start();

	while(!feof($f))
	{
		$command = fgets($f) . "<br/>";
		
		if($command == "학교불 켜")
		{
			file_get_contents("http://192.168.0.25/lighton.php");
		}
		else if($command == "학교불 꺼")
		{
                        file_get_contents("http://192.168.0.25/lightoff.php");
		}
	}
	fclose($f);
	echo $_GET['callback'].'('.json_encode($data).')';
?>
