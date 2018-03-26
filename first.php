<!DOCTYPE html>
<html>
<head>
	<title>Javasript Examples</title>
	<script>
		function myfunction(){
		document.getElementById("name").innerHTML = "Panda";
	}
	</script>
</head>
<body>
	<p>JS variables</p>
	<p id="name">Animal</p>
	<button type="button" onclick="myfunction()">Show the Name</button>
	<!-- <script>	
			var carName = "Panda";
			document.getElementById("name").innerHTML = carName;
	</script> -->
</body>
</html>