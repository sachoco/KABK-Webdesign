<html>
<head>
	<title>Introduction to PHP</title>
</head>
<body>
	<h1>Introduction to PHP</h1>
	<p>
<?php

/* 	$_GET variable get values from url e.g. filename.php?satoshi=happy */
	$satoshi = $_GET["satoshi"];
	
/* 	Let's user the "IF" statement */
	if($satoshi=="happy"){
		echo "He is jumping around in the class."
	}else{
		echo "He doesn't talk."
	}
	
/* 	Try to see which line of aboves shows up */
?>
	</p>
</body>
</html>