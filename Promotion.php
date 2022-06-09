<?php
//include
include"Menu.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectqc";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//view table
$query = "SELECT * FROM cashiers " ;
$result = mysqli_query($conn,$query);

//EDIT:
if(isset($_POST['Edit']))
{
  $ID=$_POST['ID'];
  $name=$_POST['name'];
  $Status=$_POST['Status'];
  $EDIT="UPDATE  cashiers set Status='$Status' WHERE ID='$ID'";
  if($conn->query($EDIT)==true)
  {
  echo "Record updated successfully";
} 
else
 {
  echo "Error updating record: " . $conn->error;
}
}

//SEARCH:
if(isset($_POST['Search']))
{
  $ID=$_POST['ID'];
  $name=$_POST['name'];
  $sql="SELECT * from cashiers WHERE ID='$ID'";
  $result = mysqli_query($conn,$sql);
 
}
?>

<html>
<head>
<style>
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
/* box el edit */
#background2{
transform: translate(-90%,-90%);
border-radius: 8px;
border: 1px solid rgb(37, 37, 37);
background-color: rgb(37, 37, 37);
height: 520px;
width:450px;
background:blur(20px);
margin-top:500px;
margin-left:1400px;
background-attachment: absolute;
text-decoration: none;
position: absolute;

}
/* title el fo2 input */
label{  
display: block;
margin-top: 15px;
margin-left: 15px;
font-size: 25px;
font-weight: 550;

}
/* el gwa el input */
::placeholder{
color: rgb(196, 196, 196);
text-align: center;
}
/* input el edit w el delete */
input{
border: 1px solid rgba(255,255,255,0.07);
display: block;
height: 40px;
width: 430px;
background-color: rgba(255,255,255,0.07);
color: rgb(196, 196, 196);
text-align: center;
border-radius: 8px;
margin-top: 20px;
margin-left: 15px;
font-size: 16px;
font-weight: 700;
}
/* button el edit w el delete */
button{
border: 1px solid rgba(240, 156, 0, 0.947);
text-align: center;
margin-top: 50px;
margin-left: 15px;
height: 40px;
width: 430px;
background-color: rgba(240, 156, 0, 0.947);
color: rgb(37, 37, 37);
font-size: 16px;
font-weight: 700;
border-radius: 8px;
cursor: pointer;
}
</style>
</head>
<body>
<table class="table ">
<thead>
<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Status</th>
	 <br><br><br><br>
</tr>

</thead>

	<div id="background2">
 <form action=" " method="post">
<label for="ID">ID</label>
<input type="text" placeholder="ID" name="ID" id="ID" required="">

<label for="Status">status</label>
<input type="text" placeholder="status" name="Status" id="Status">

<button type="submit"name="Edit" >Edit</button>

<button type="submit"name="Search" >Search</button> 
<br>
</form>
</body>
</html>
<?php
 
while($row = mysqli_fetch_array($result)) 
{

?>
<tr>
  
	<td><?= $row['ID']; ?></td>
	<td><?= $row['name']; ?></td>
	<td><?=  $row['Status']; ?></td>	 
</tr>
<?php
 
}
?>
