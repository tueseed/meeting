<?php
	$server = "us-cdbr-iron-east-01.cleardb.net";
	$username = "ba1c29a3a23619";
	$password = "95eaae88";
	$db = "heroku_324ce37d2926511";
	$conn = new mysqli($server, $username, $password, $db);
	mysqli_query($conn, "SET NAMES utf8");
?>