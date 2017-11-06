<html>
<head>
	<title>Pan Tadeusz</title>
	<meta charset="utf-8">
</head>
<body>
	<p>Spis tresci</p>
	<ol>
		<?php
		
		for ($i=1; $i <= 12; $i++) {
				echo "<li><a href='./index.php?ksiega=$i'>
				Ksiega $i</a></li>";
		}
		
		if (!empty($_GET)) {
			$k = $_GET['ksiega'];
			include_once("./k$k.html");
		}
		
		?>
	</ol>
</body>
</html>