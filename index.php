<!DOCTYPE html>
<html>
<head>
	<title>Saturnus napló</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<script type="text/javascript">
	function toggleSidebar(){
		document.getElementById("sidebar").classList.toggle('active');
	}
	function toggleSidebar2(){
		document.getElementById("sidebar2").classList.toggle('active2');
	}
</script>
<body>
		<div id="sidebar">
		<div class="toggle-btn" onclick="toggleSidebar()">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<ul>
			<a href="sites/loginsite/login.php"><li>Bejelentkezés</li></a>
			<form id='testform' name='testform' method='post' action='index.php'>
			<li><input id="id" type="text" placeholder="Írja be a kódját..." name="id" style='width:16vw'></li></form>
		</ul>
		
	</div>
	<?php
	require("sites/indexsite/controller.php");
	$table = new Controller();
	echo $table->CreateTables();
	?>
</div>
</body>
</html>