<!-- responsivevoice.js -->
<script src="http://code.responsivevoice.org/responsivevoice.js"></script>
<script src="text/javascript">
	function say() {
		if(responsiveVoice.voiceSupport()) {
			console.log('Responsvie Voice Supported');
			responsiveVoice.speak("예쁜 꽃 그리는 법","Korean Female");
		}
	}
</script>
