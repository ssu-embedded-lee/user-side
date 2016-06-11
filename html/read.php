<html>

<head>
</head>


<body>


<?php
	$f = fopen("/var/www/html/loadData.txt", "r");
	

	while(!feof($f))
	{
		//디바이스며
		echo fgets($f) . "<br />";
		
	}


	fclose($f);

?>







</body>


</html>
