<?php
include"Menu.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectqc";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// query 3alshan yjoin etneen tables m3 b3d benhom col moshtakr 
$query = "SELECT * FROM reports INNER JOIN table2 ON mesh fahem b2a el ba2y" ;
$result = mysqli_query($conn,$query);
?>
<html>
<head>
<style>
h1{
	color:white;
	 text-align: center;
}
body
{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-color: rgb(22,22,22);
    height: 100%;
	width: 100%; 
}
table, th, td {
border: 2px solid rgb(196, 196, 196);
color:rgb(196, 196, 196);
font-weight: 900;
}	
th, td{
	text-align: center;
}
</style>
<h1>Reports and Ratings of the users</h1>
</head>
<body>


</body>
</html>