<?php
	$data = system("sudo /var/www/html/dowork 2");
	
	$f = fopen("sudo /var/www/html/loadData.txt", "r");
	
	while(!feof($f))
	{
		$command = fgets($f) . "<br/>";
		
		if($command == "학교불 켜")
		{
			$.ajax({
                                        type:"GET",
                                        async:"false",
                                        url:"http://192.168.0.25/lighton.php",
                                        dataType:"jsonp",
                                        data:"list",
                                        callback:"temper",
                                        success:function(data){
                                                responsiveVoice.speak("불을 켰습니다!", "Korean Female");
                                        },
                                        error:function(){
                                         alert("Fail");
                                         }
                                });

		}
		else if($command == "학교불 꺼")
		{
			$.ajax({
                                        type:"GET",
                                        async:"false",
                                        url:"http://192.168.0.25/lightoff.php",
                                        dataType:"jsonp",
                                        data:"list",
                                        callback:"temper",
                                        success:function(data){
                                                responsiveVoice.speak("불을 껐습니다!", "Korean Female");
                                        },
                                        error:function(){
                                         alert("Fail");
                                         }
                                });

		}
	}
	fclose($f);
	echo $_GET['callback'].'('.json_encode($data).')';
?>
