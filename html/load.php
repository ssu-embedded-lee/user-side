<?php
	$data = system("sudo /var/www/html/dowork 2");
	system("sudo chmod 0777 /var/www/html/loadData.txt");	
	$f = fopen("/var/www/html/loadData.txt", "r");

	ob_start();

	while(!feof($f))
	{
		$command = fgets($f) . "<br/>";
		
		if(strstr($command, "학교불 켜"))
		{
			file_get_contents("http://192.168.0.27/subo-light-controll.php?type=1");
		}
		else if(strstr($command, "학교불 꺼"))
		{
                        file_get_contents("http://192.168.0.27/subo-light-controll.php?type=0");
		}
	}
	fclose($f);
	echo $_GET['callback'].'('.json_encode($data).')';
?>
