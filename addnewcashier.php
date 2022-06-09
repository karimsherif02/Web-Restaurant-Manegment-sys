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
$query = "SELECT * FROM cashiers " ;
$result = mysqli_query($conn,$query);

//Add:
if(isset($_POST['Add']))
{
  $Name=$_POST['Name'];
	$Status=$_POST['Status'];
	$Account=$_POST['Account'];
  $Add="INSERT INTO cashiers(name,Status,Account) VALUES ('$Name','$Status','$Account')";
  if($conn->query($Add)==false)
  {
  echo "Error updating record: " . $conn->error;
} 
else
 {
	 echo '<script>alert("succesfully")</script>';
}
}
//DISABLE:
if(isset($_POST['Disable']))
{
  $ID=$_POST['ID'];
  //$name=$_POST['name'];
//$Status=$_POST['Status'];
  $Account=$_POST['Account'];
  $Querydis="UPDATE  cashiers set Account='$Account' WHERE ID='$ID'";
  if($conn->query($Querydis)==true)
  {
echo '<script>alert("succesfully")</script>';
} 
else
 {
  echo "Error updating record: " . $conn->error;
}
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
	<th>Account</th>
	 <br><br><br><br>
</tr>

</thead>
<br><br><br>

 <form
 <form action=" " method="post">
 
 <label for="ID">ID</label>
<input type="text" placeholder="ID" name="ID" id="ID">

<label for="Name">Name</label>
<input type="text" placeholder="Name" name="Name" id=">
<label for="Status">status</label>
<input type="text" placeholder="status" name="Status" id="Status" >

<label for="Account">Account</label>
<input type="text" placeholder="status" name="Account" id="Account" value="enabled">

<button type="submit"name="Add" id="Add">Add</button>

<button type="submit"name="Disable" id="Disable">Disable/Enable</button>
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
	<td><?=  $row['Account']; ?></td>		
</tr>
<?php
 
}
?>
