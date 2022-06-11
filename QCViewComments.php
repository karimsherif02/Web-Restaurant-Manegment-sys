<?php
include"Menu.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectqc";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//view table
$query = "SELECT * FROM usercomments " ;
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
<h1>Comments of the users</h1>
</head>
<body>
<table class="table ">
<thead>
<br><br><tr>

	<th>ID</th>
	<th>Name</th>
	<th>Comments</th>
	
</tr>

</thead>


</body>
</html>

<?php
 
while($row = mysqli_fetch_array($result)) 
{

?>
<tr>
  
	<td><?= $row['ID']; ?></td>
	<td><?= $row['Name']; ?></td>
	<td><?=  $row['Comments']; ?></td>
	
</tr>
<?php
 
}
?>