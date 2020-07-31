<?php 
$username="root";  
$password="";  
$hostname = "localhost"; 

$dbhandle = mysqli_connect($hostname,$username,$password)  
or die("Unable to connect to MySQL ");  
echo "connected to MYSQL<br/>"; 

 
$selected = mysqli_select_db($dbhandle, "covid")  
or die("Could not select exercise DB"); 

echo "connected to DB"; 
echo "$selected"; 

$emaild= $_POST['email'];

$psw= $_POST['password'];


$sql = "insert into login (email,password) values('$emaild','$psw')";

if(mysqli_query($dbhandle,$sql)){


	header('Location:mainew.html');
}
else{
	header('Location:signup.html');
}



?>