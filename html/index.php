<html>
   <head>
<meta charset="UTF-8">
  <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.4.0/annyang.min.js"></script>
  <script src="//code.responsivevoice.org/responsivevoice.js"></script>

<script type="text/javascript">
	function say(){
		if(responsiveVoice.voiceSupport()){
			console.log('Responsive Voice Supported');
			responsiveVoice.speak("주인님 지니를 부르셨습니까!", "Korean Female");
		}
	}
 	function lighton(){
                if(responsiveVoice.voiceSupport()){
                        console.log('Responsive Voice Supported');
                        responsiveVoice.speak("불을 키겠습니다!", "Korean Female");
                }
        }
        function feed(){
                if(responsiveVoice.voiceSupport()){
                        console.log('Responsive Voice Supported');
                        responsiveVoice.speak("니가 알아서 쳐머겅!", "Korean Female");
                }
        }
	var d=new Date();
	var hours=String(d.getHours()) + "시";
	var minutes=String(d.getMinutes()) +"분 입니다";
	function time(){
                if(responsiveVoice.voiceSupport()){
                        console.log('Responsive Voice Supported');
                        responsiveVoice.speak(hours+minutes, "Korean Female");
                }
        }
</script>


<script>
if (annyang) {
 // Let's define a command.
 var commands = {
   '지니': function() { say(); },
  '배고파': function() {feed(); },
  '불 켜': function() {lighton(); },
  '몇시야': function() {time(); }
 //Define end
 };
 // Add our commands to annyang
   annyang.setLanguage("ko");
 annyang.addCommands(commands);
   
 // Start listening.
 annyang.start();
   
}
</script>


<body>
<center>
<img src=./ginie.jpg>
<?php
echo "helloworld!<br>";
system("./inputProcess1", $result);
echo $result;
?>
</center>
</body>
</html>
