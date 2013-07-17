<!doctype html>
<html>
<head>
  <title>Demo PhoneGap</title>
</head>
<body>
	<button id="clickit">Click</button>
	<button id="clearit">Clear Html</button>
	<div id="result">
	
	</div>
	
<script src = "js/jquery.js"></script>
<script>
			$(document).ready(function(){
				$("#clickit").click(function () {
					$("#result").prepend( "<br>" + Date() +"  hum working nice ");
						
				});
				$("#clearit").click(function () {
					$("#result").html("");
				});
				console.log("ready");
			}); 
</script>
</body>


</html>
