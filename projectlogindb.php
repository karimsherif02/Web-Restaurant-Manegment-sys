<?php
//connect to database
if(!$conn=mysqli_connect("localhost","root","","project db"))
{
die("failed to connect!");
}
   
if($_SERVER['REQUEST_METHOD']=="POST")
{
		$email=$_POST['email'];
        $password=$_POST['password'];
		
 //query to insert in database the mail and password     
 
   $query="INSERT INTO loginpage(emails,passwords)
   VALUES ('$email','$password')";


mysqli_query($conn,$query);
echo"connected to database succufully<br>";


}


?>