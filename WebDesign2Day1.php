<html>
<head>
	<title>Introduction to PHP</title>
</head>
<body>
	<h1>Introduction to PHP</h1>
	<p>
<?php

	$username = "your_name";
	$password = "your_password";
	$hostname = "localhost"; 
	
	//connection to the database
	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");

	//select a database to work with
	$selected = mysql_select_db("day1",$dbhandle) 
	  or die("Could not select examples");

	//execute the SQL query and return records
	$result = mysql_query("SELECT * FROM students");
	//fetch tha data from the database
	while ($row = mysql_fetch_array($result)) {
	   echo $row['first_name']." ".$row['last_name']." from ".$row['country']."<br>";
	}

?>
	</p>
</body>
</html>