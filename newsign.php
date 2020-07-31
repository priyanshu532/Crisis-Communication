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


$user=$_POST['username'];

$phone=$_POST['phoneno'];
$emaild= $_POST['email'];
$addrs=$_POST['address'];
$password= $_POST['psw'];


$sql = "insert into signup (username,phoneno,email,address,psw) values('user','phone',$emaild','addrs','$password')";

if(mysqli_query($dbhandle,$sql)){


	header('Location:mainew.html');
}
else{
	header('Location:index.html');
}



?>



